
<?php use Cake\Core\Configure;
$PagesCount = '';
if ( !empty( $this->request->query('page') ) ) {
    $PagesCount = $this->Paginator->counter(' | {{page}}-{{pages}}');
}
?>
<?php $this->assign('title',  Configure::read('slogan1') . ' on ' . $tagName . ' | ' . Configure::read('websiteName') ); ?>
<?php $this->assign('meta_description', Configure::read('websiteName') . ' is a currated list of ' . Configure::read('slogan1') .' stories.' ); ?>
<?php $this->assign('canonical',  $canonical ); ?>

<?php // debug($metaNoFollow); // change this if is a companies.id > 0 or has tags.description not empty ?>
<?php if ( $metaNoFollow == true) { $this->assign('meta_index', 'noindex, follow' ); } // e.g. for category pages   ?>

<?php // if supplied, override with tag-specific values 
if ($tag->seo_title) {
    $this->assign('title',  trim($tag->seo_title) . $pagesCount . ' | ' . Configure::read('websiteName') );
}
if ($tag->meta_desc) {
    $this->assign('meta_description', $tag->meta_desc );
}
?>
<!--
    'title' => 'Montreal',
    'slug' => 'montreal',
    'company_id' => null,
    'description' => null,
    'meta_desc' => null,
    'seo_title' => null,

    'company' => object(App\Model\Entity\Company) {

        'id' => (int) 4,
        'name' => 'Bombardier Inc.',
        'description' => 'Bombardier Inc. is a Canadian multinational aerospace and transportation company, founded by Joseph-Armand Bombardier as L'Auto-Neige Bombardier Limitée (loosely translated to "Bombardier Snow Car Limited") on January 29, 1942, at Valcourt in the Eastern Townships, Quebec.',
        'created' => object(Cake\I18n\Time) {

            'time' => '2016-03-07T04:32:47+00:00',
            'timezone' => 'UTC',
            'fixedNowTime' => false
        
        },    

-->


        <!--=== End Header ===-->

    <!-- Interactive Slider v2 -->
    <!--
    <div class="interactive-slider-v2">
        <div class="container">
            <h1>Welcome to Unify</h1>
            <p>Clean and fully responsive Template.</p>
        </div>
    </div>
    -->
    <!-- End Interactive Slider v2 -->

    <?php //debug($articles); ?>


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">
            <?php if ( empty($tag->company->name) ): ?>
                Latest <?= Configure::read('slogan1') ?> On: <?= ucwords($tagName) ?>
            <?php else: ?>
                <?= $tag->company->name ?>
            <?php endif; ?>
            </h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <!--
                <li><a href="">Portfolio</a></li>
                <li class="active">Blog</li>
                -->
            </ul>

            <h4 class="pull-left clearboth">
                <?php if ( empty($tag->description) ){
                    echo $tag->meta_desc;
                } else {
                    echo  $tag->description;  
                } ?>
            </h4>
        </div><!--/container-->
        
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

     

    <!--=== Content Part ===-->
    <div class="blog_masonry_3col">
        <div class="container content grid-boxes">


          

        <?php $loopCounter = 1; $adCounter = 0;?>    
        <?php foreach ($articles as $article): //debug($article); exit; ?>

             <?php if ( !$metaNoFollow && ($loopCounter % 3 == 0 ) && ( $adCounter < 3 ) ) : //  ?>
            <div class="grid-boxes-in"> 
            
                <ins class="adsbygoogle"
                     style="display:block;width:336px;height:280px; margin: auto;"
                     data-ad-client="ca-pub-5569648086666006"
                     data-ad-slot="8475068701"></ins>
                <script> 
                // MaximumVenture - 336x280 square
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
           
            </div>   
            <?php $adCounter++; ?>
            <?php endif; ?> 
                   
            <?php echo $this->element('article_box', [ 'article' => $article] , ['cache' => ['key' => 'article_box_' . $article->id ] ] ); ?>
            
            <?php $loopCounter++; ?>      
        <?php endforeach; ?>


          
            <!--
            <div class="grid-boxes-in"> 
                    
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                     style="display:block;width:336px;height:280px; margin: auto"
                     data-ad-client="ca-pub-5569648086666006"
                     data-ad-slot="8475068701"></ins>
                <script> 
                // MaximumVenture - 336x280 square
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            
            </div>
            -->

          


          



           



        </div><!--/container-->

    </div> <!-- end of massonary class-->
    <!--=== End Content Part ===-->

    <!--Pagination-->
    <div class="text-center">
    
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>

<!--
        <ul class="pagination">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">»</a></li>
        </ul>

    -->

    </div>
    <!--End Pagination-->
