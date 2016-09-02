<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venue Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $seo_title
 * @property string $seo_desc
 * @property string $page_url
 * @property string $description
 * @property int $province_id
 * @property int $country_id
 * @property int $city_id
 * @property string $geo_cords
 * @property int $neighbourhood_id
 * @property int $establishment_type_id
 * @property bool $flag_mall
 * @property bool $flag_closed
 * @property bool $flag_published
 * @property int $inside_venue_id
 * @property string $phone_1
 * @property string $phone_2
 * @property string $website_url
 * @property string $address
 * @property string $hours_sun
 * @property string $hours_mon
 * @property string $hours_tue
 * @property string $hours_wed
 * @property string $hours_thu
 * @property string $hours_fri
 * @property string $hours_sat
 * @property string $hours_holidays
 * @property float $user_rating
 * @property int $user_votes
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Neighbourhood $neighbourhood
 * @property \App\Model\Entity\EstablishmentType $establishment_type
 * @property \App\Model\Entity\InsideVenue $inside_venue
 * @property \App\Model\Entity\Amenity[] $amenities
 * @property \App\Model\Entity\Cuisine[] $cuisines
 * @property \App\Model\Entity\Feature[] $features
 * @property \App\Model\Entity\VenuePhoto[] $venue_photos
 */
class Venue extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
