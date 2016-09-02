<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Topmenu cell
 */
class TopmenuCell extends Cell
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
        /*
        // load up list of cities    
        $this->loadModel('Cities');
        $cityList = $this->Cities->find('all', ['fields' => [ 'name', 'slug'] ] )->where( ['Cities.flag_featured' => 1] )->order('Cities.name asc');
        //debug($cityList);
        $this->set('cityList', $cityList );
        //$unread = $this->Messages->find('unread');
        //$this->set('unread_count', $unread->count());

        // load up latest blog
        $this->loadModel('Articles');
        $blogPost = $this->Articles->find('all', [ 
            'fields' => [ 'name', 'slug', 'feature_text', 'ImageUploads.file_meta'] ] )
            ->contain('ImageUploads')
            ->where(['Articles.flag_featured' => 1 ] )
            ->first();

        $blogPost = $blogPost->toArray(); // run and create array from object

        $images = json_decode($blogPost['image_upload']['file_meta'], true);
       // debug($blogPost);

       // debug($images['sizes']['megamenu']['filename']);
        

        $this->set('feature_image', $images['sizes']['megamenu']['filename']);
        $this->set('feature_text', $blogPost['feature_text']);
        $this->set('article_name', $blogPost['name'] );
        $this->set('article_slug', $blogPost['slug']);
        */
    }
}
