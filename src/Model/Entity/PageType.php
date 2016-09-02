<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PageType Entity.
 */
class PageType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'landings' => true,
    ];
}
