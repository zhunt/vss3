<?php
namespace App\View\Cell;

use Cake\View\Cell;

use Cake\Utility\Hash;

/**
 * SuggestArticle cell
 */
class SuggestArticleCell extends Cell
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
    public function display($num, $articleId, $category1 = null, $category2 = null, $tags = null )
    {

        $category1 = $category1->id;

        if ( $category2 !== null) {
            $category2 = $category2->id;
        } else $category2 = $category1;


         $tags = Hash::extract($tags, '{n}.id');

          //debug( $tags); 

        //exit;
        $this->loadModel('Articles');

       // $cacheKey = 
        $result = 
            $this->Articles->find()
            ->select(['id', 'seo_title', 'slug'])
            ->where(['Articles.id !=' => $articleId])
            ->where([
                'OR' => [
                    ['Articles.category_id' => $category1 ],
                    ['Articles.category_id' => $category2 ],
                    ['Articles.category_id_2' => $category1 ],
                    ['Articles.category_id_2' => $category2 ]
                ]
            ])
            ->where(['Articles.flag_published' => true ])
            ->order('rand()')
            ->limit($num)
            ->cache('suggested_' . $articleId );

            $this->set('suggestedArticles', $result);

            //debug( $result->toArray() );

              
            

               
        //$categoriesList = $this->Categories->find('list', [ 'keyField' => 'slug', 'order' => [ 'Categories.name' => 'ASC'] ] )->toArray();

       // $this->set('categoriesList',  $categoriesList ); 
        $this->set('num',  $num ); 
    }
}

/*
 'num' => 3, 
                        'articleId' => $article->id,
                        'articleCat1Id' => $article->category->id,
                        'articleCat2Id' => $article->categories2->id,
                        'tags' => $article->tags
*/