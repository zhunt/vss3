<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

use Geo\Exception\InconclusiveException;
use Geo\Geocoder\Geocoder;

use Cake\ORM\TableRegistry; 

/**
 * Geocode component
 */
class GeocodeComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /*
	returns array of:
	- address
	- subLocality
	- city
	- provinceRegion
	- province
	- country
	- geo latt / long

	VenueModel handles saving to DB
    */

    function geocodeAddress($address) {

		$this->Geocoder = new Geocoder();
		$this->Geocoder->config(['allowInconclusive' => true, 'minAccuracy' => Geocoder::TYPE_POSTAL]);
		$addresses = $this->Geocoder->geocode($address);

		if (!empty($addresses)) {
		   $address = $addresses->first();

		   $formatter = new \Geocoder\Formatter\StringFormatter();

		   // see: http://geocoder-php.org/Geocoder/ for codes
		   $country = $formatter->format($address, '%C');
		   $city = $formatter->format($address, '%L');
		   $cityRegion = $formatter->format($address, '%D');

		   $province = $formatter->format($address, '%A1');
		   $provinceRegion = $formatter->format($address, '%A2'); 
		   $adminRegion3 = $formatter->format($address, '%A3');
		   $adminRegion4 = $formatter->format($address, '%A4'); 
		   $adminRegion5 = $formatter->format($address, '%A5'); 
		   $geoLatt = $address->getLatitude();
		   $geoLong = $address->getLongitude();

			// now encode the city 
		   if (!empty($city)) {
		   	$addresses = $this->Geocoder->geocode("{$city}, {$province}, {$country}");	
		   	if (!empty($addresses)) {
		   		$address = $addresses->first();
		   		$cityLatt = $address->getLatitude();
		   		$cityLong = $address->getLatitude();
		   	} 
		   }else {
		   	$cityLatt = 0; $cityLong = 0;
		   }	   	

			// Geocode province region (if one)
		   if (!empty($provinceRegion)) {
		   	$addresses = $this->Geocoder->geocode("{$provinceRegion}, {$province}, {$country}");	
		   	if (!empty($addresses)) {
		   		$address = $addresses->first();
		   		$provinceRegionLatt = $address->getLatitude();
		   		$provinceRegionLong = $address->getLatitude();
		   	} 
		   } else {
		   	$provinceRegionLatt = 0; $provinceRegionLong = 0;
		   }	   			   

			// Geocode city region (if one)
		   if (!empty($cityRegion)) {
		   	$addresses = $this->Geocoder->geocode("{$cityRegion}, {$city}, {$province}, {$country}");	
		   	if (!empty($addresses)) {
		   		$address = $addresses->first();
		   		$cityRegionLatt = $address->getLatitude();
		   		$cityRegionLong = $address->getLatitude();
		   	} else {

		   	}	   	
		   } else { $cityRegionLatt = 0; $cityRegionLong = 0; }


		   $data = [
		   	'country' => $country,
		   	'province' => $province,	
		   	'provinceRegion' => $provinceRegion,	  
		   	'provinceRegionLatt' => $provinceRegionLatt,
		   	'provinceRegionLong' => $provinceRegionLong,		   	 		   	
		   	'city' => $city,
		   	'cityLatt' => $cityLatt,
		   	'cityLong' => $cityLong,
		   	'cityRegion' => $cityRegion,
		   	'cityRegionLatt' => $cityRegionLatt,
		   	'cityRegionLong' => $cityRegionLong,
		   	'admin3' => $adminRegion3,
		   	'admin4' => $adminRegion4,
		   	'admin5' => $adminRegion5,
		   	'geoLatt' => $geoLatt,
		   	'geoLong' => $geoLong
		   ];
		   //debug($data);
		   return $data;
		   
		}		

    }


    // save geo data to database

    function saveGeoData($geoData, $venueData = null){

    	$countryId = 0;
    	$provinceId = 0;
    	$provinceRegionId = 0;
    	$cityId = 0;
    	$cityRegionId = 0;

    	$countriesTable = TableRegistry::get('Countries');

    	// check if the county in is the db
		$result = $countriesTable->find('all')->where(['Countries.name' => $geoData['country'] ])->first();

		if ( !$result) {

			$country = $countriesTable->newEntity();

			$country->name = $geoData['country'];

			if ($countriesTable->save($country)) {
			    $countryId = $country->id;
			}

		} else {
			$countryId = $result->id;
		}

		// Province
		$provincesTable = TableRegistry::get('Provinces');
		$result = $provincesTable->find('all')->where([
			'Provinces.name' => $geoData['province'],
			'Provinces.country_id' => $countryId
			])->first();

		if ( !$result) {

			$province = $provincesTable->newEntity();

			$province->name = $geoData['province'];
			$province->country_id = $countryId;

			if ($provincesTable->save($province)) {
			    $provinceId = $province->id;
			}

		} else {
			$provinceId = $result->id;
		}	

		// if province region set
		if ( $geoData['provinceRegion'] != '') {

			$provinceRegionsTable = TableRegistry::get('ProvinceRegions');
			$result = $provinceRegionsTable->find('all')->where([
				'ProvinceRegions.name' => $geoData['provinceRegion'],
				'ProvinceRegions.country_id' => $countryId
				])->first();

			if ( !$result) {

				$provinceRegion = $provinceRegionsTable->newEntity();

				$provinceRegion->name = $geoData['provinceRegion'];
				$provinceRegion->country_id = $countryId;
				$provinceRegion->province_id = $provinceId;

				if ($provinceRegionsTable->save($provinceRegion)) {
				    $provinceRegionId = $provinceRegion->id;
				}

			} else {
				$provinceRegionId = $result->id;
			}	

		}	

		// if city set 
		// if province region set
		if ( $geoData['city'] != '') {

			$citiesTable = TableRegistry::get('Cities');

			$whereConditions = [
				'Cities.name' => $geoData['city'],
				'Cities.province_id' => $provinceId,
				'Cities.country_id' => $countryId
			];
			if ( $provinceRegionId > 0 ){
				$whereConditions['Cities.province_region_id'] = $provinceRegionId;	
			}

			$result = $citiesTable->find('all')->where([$whereConditions])->first();

			if ( !$result) {

				$city = $citiesTable->newEntity();

				$city->name = $geoData['city'];
				$city->country_id = $countryId;
				$city->province_id = $provinceId;
				$city->province_region_id = $provinceRegionId;

				if ($citiesTable->save($city)) {
				    $cityId = $city->id;
				}

			} else {
				$cityId = $result->id;
			}	

		}	

//debug($geoData['cityRegion']);
		if ( $geoData['cityRegion'] != '') {

			$cityRegionsTable = TableRegistry::get('CityRegions');

			$whereConditions = [
				'CityRegions.name' => $geoData['cityRegion'],
				'CityRegions.province_id' => $provinceId,
				'CityRegions.country_id' => $countryId
			];
			if ( $cityId > 0) {
				$whereConditions['CityRegions.city_id'] = $cityId;
			}
			if ( $provinceRegionId > 0 ) {
				$whereConditions['CityRegions.province_region_id'] = $provinceRegionId;
			}

			$result = $cityRegionsTable->find('all')->where([$whereConditions])->first();

			if ( !$result) {

				$cityRegion = $cityRegionsTable->newEntity();

				$cityRegion->name = $geoData['cityRegion'];
				$cityRegion->country_id = $countryId;
				$cityRegion->province_id = $provinceId;
				$cityRegion->province_region_id = $provinceRegionId;
				$cityRegion->city_id = $cityId;

				if ($cityRegionsTable->save($cityRegion)) {
				    $cityRegionId = $cityRegion->id; 
				}

			} else {
				$cityRegionId = $result->id;
			}	

		}	

		return ( [  
			'countryId' => $countryId,
	    	'provinceId' => $provinceId,
	    	'provinceRegionId' => $provinceRegionId,
	    	'cityId' => $cityId,
	    	'cityRegionId' => $cityRegionId
    		] 
    	) ;

    }


    function reEncodeCity( $cityName, $province, $country) {
    	if ( empty($cityName) ) return;

// --

		$this->Geocoder = new Geocoder();
		$this->Geocoder->config(['allowInconclusive' => true, 'minAccuracy' => Geocoder::TYPE_POSTAL]);
		//debug("{$cityName}, {$province['name']}, {$country['name']}");
		$addresses = $this->Geocoder->geocode( "{$cityName}, {$province['name']}, {$country['name']}");

		if (!empty($addresses)) {
		   $address = $addresses->first();
		   $geoLatt = $address->getLatitude();
		   $geoLong = $address->getLongitude();   

		   return ['geoLatt' => $geoLatt, 'geoLong' =>  $geoLong ];
		}	
    	//---


    }

}
