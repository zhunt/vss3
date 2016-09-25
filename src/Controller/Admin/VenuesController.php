<?php
namespace App\Controller\Admin;




use Cake\ORM\TableRegistry;

use App\Controller\AppController;



/**
 * Venues Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 */

class VenuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Provinces', 'Countries', 'Cities', 'Neighbourhoods', 'EstablishmentTypes', 'InsideVenues']
        ];
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
        $this->set('_serialize', ['venues']);
    }

    /**
     * View method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['Provinces', 'Countries', 'Cities', 'Neighbourhoods', 'EstablishmentTypes', 'InsideVenues', 'Amenities', 'Cuisines', 'Features', 'VenuePhotos']
        ]);

        $this->set('venue', $venue);
        $this->set('_serialize', ['venue']);
    }


        /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function simple_add()
    {
        $venue = $this->Venues->newEntity();
        if ($this->request->is('post')) {

            $address = $this->request->data['address']; //debug($address); // here

             $this->loadComponent('Geocode');

             // remove temp - we use data here
             $data = $this->Geocode->geocodeAddress($address);


/*
$data=
[
    'country' => 'Canada',
    'province' => 'Ontario',
    'provinceRegion' => 'Toronto Division',
    'provinceRegionLatt' => 43.6689775,
    'provinceRegionLong' => 43.6689775,
    'city' => 'Toronto',
    'cityLatt' => 43.653226,
    'cityLong' => 43.653226,
    'cityRegion' => 'Old Toronto',
    'cityRegionLatt' => 43.653226,
    'cityRegionLong' => 43.653226,
    'admin3' => '',
    'admin4' => '',
    'admin5' => '',
    'geoLatt' => 43.6534199,
    'geoLong' => -79.3899873
];
*/


            $locationData = $this->Geocode->saveGeoData($data);


            $this->request->data = [
            'name' => $this->request->data['name'],
            'address' => $this->request->data['address'],
            'geo_cords' => $data['geoLatt'] . ', ' . $data['geoLong'],
            'country_id' => $locationData['countryId'],
            'province_id' => $locationData['provinceId'],
            'province_region_id' => $locationData['provinceRegionId'],
            'city_id' => $locationData['cityId'],
            'city_region_id' => $locationData['cityRegionId'],

            'neighbourhood_id' => 1,
            'establishment_type_id' => 1


            ];




            //$this->request->data 43.653226, -79.383184


            // ---------------
            $venue = $this->Venues->patchEntity($venue, $this->request->data, ['validate' => true] );
            //debug($venue); 
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                //return $this->redirect(['action' => 'index']);
            } else {
                debug( $venue->errors() );
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->InsideVenues->find('list', ['limit' => 200]);
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

/*
    public function query() {
        $this->Geocoder = new Geocoder();
        $results = [];
        $country = $this->Countries->newEntity();
        if ($this->Common->isPosted()) {
            $this->Countries->validator()->add('address', [
                'notEmpty' => [
                    'rule' => 'notBlank',
                    'message' => 'valErrMandatoryField',
                    'last' => true
                ]]);
            $country = $this->Countries->patchEntity($country, $this->request->data);
            $address = $this->request->data['address'];
            $settings = [
                'allowInconclusive' => $this->request->data['allow_inconclusive'],
                'minAccuracy' => $this->request->data['min_accuracy']
            ];
            $this->Geocoder->config($settings);
            if (!$country->errors()) {
                try {
                    $results = $this->Geocoder->geocode($address);
                } catch (InconclusiveException $e) {
                    $this->Flash->error(__('Nothing found'));
                }
            } else {
                $this->Flash->error(__('formContainsErrors'));
            }
        } else {
            $this->request->data['allow_inconclusive'] = 1;
            $this->request->data['min_accuracy'] = Geocoder::TYPE_COUNTRY;
        }
        $minAccuracies = $this->Geocoder->accuracyTypes();
        $this->set(compact('country', 'results', 'minAccuracies'));
    }
    */



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venue = $this->Venues->newEntity();
        if ($this->request->is('post')) {
            $venue = $this->Venues->patchEntity($venue, $this->request->data);
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->InsideVenues->find('list', ['limit' => 200]);
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['Amenities', 'Cuisines', 'Features', 'VenuePhotos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venue = $this->Venues->patchEntity($venue, $this->request->data);
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->InsideVenues->find('list', ['limit' => 200]);
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venue = $this->Venues->get($id);
        if ($this->Venues->delete($venue)) {
            $this->Flash->success(__('The venue has been deleted.'));
        } else {
            $this->Flash->error(__('The venue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
