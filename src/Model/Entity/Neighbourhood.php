<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Neighbourhood Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $page_url
 * @property string $google_administrative_area_level_1
 * @property string $google_administrative_area_level_2
 * @property string $description
 * @property string $seo_title
 * @property int $city_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Venue[] $venues
 */
class Neighbourhood extends Entity
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
