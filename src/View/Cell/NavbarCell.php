<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Navbar cell
 */
class NavbarCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Categories');

               
        $categoriesList = $this->Categories->find('list', [ 'keyField' => 'slug', 'order' => [ 'Categories.name' => 'ASC'] ] )->toArray();

        $this->set('categoriesList',  $categoriesList ); 

    }
}
