<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProvinceRegion Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $seo_title
 * @property int $country_id
 * @property int $province_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\City[] $cities
 */
class ProvinceRegion extends Entity
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
