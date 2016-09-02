<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * RecentArticles cell
 */
class RecentArticlesCell extends Cell
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
    public function display( $currentArticleId = 0, $currentCategoryId = 0 )
    {
        $this->loadModel('Articles');
        $blogPosts = $this->Articles->find('all', [ 
            'fields' => [ 'name', 'slug', 'feature_text' ] ] )
            ->where( ['Articles.Id !=' => $currentArticleId ] )
            ->order('rand()')
            ->limit(4);
        if ($currentCategoryId != 0 ) {
            $blogPosts = $this->Articles->find('all', [ 
                'fields' => [ 'name', 'slug', 'feature_text' ] ] )
                ->where( ['Articles.Id !=' => $currentArticleId] )
                ->contain( ['Categories' => ['conditions' => ['Categories.Id' => $currentCategoryId ] ] ] )
                ->order('rand()')
                ->limit(4);   
        }    

        $this->set('relatedArticles',  $blogPosts );        
    }
}
