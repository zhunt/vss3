    <?php $this->assign('title',  Configure::read('slogan1') . ' On ' . ucwords($categoryName) . ' | ' . Configure::read('websiteName') ); ?>
    <?php $this->assign('meta_description', Configure::read('websiteName') . ' is a currated collection of ' . Configure::read('slogan1') .' stories.' ); ?>
    <?php $this->assign('canonical',  $canonical ); ?>

    <?php if ( $metaNoFollow) { $this->assign('meta_index', 'noindex, follow' ); } // e.g. for category pages   ?>


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
            <h1 class="pull-left">Latest <?= Configure::read('slogan1') ?> On: <?= $categoryName ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li class="active">Blog</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="blog_masonry_3col">
        <div class="container content grid-boxes">



        <?php foreach ($articles as $article): //debug($article); exit; ?>

            <div class="grid-boxes-in">
                <div class="grid-boxes-caption">

                    <div class="easy-block-v1">
                    <div class="easy-block-v1-badge easy-block-v1-badge-2">
                        <div style="background-color: #<?= $article->category->colour ?>; width: 100%"><?= $article->category->name ?></div>
                        <?php if ( isset($article->categories2->name) && !empty($article->categories2->name) ): ?>
                        <div style="background-color: #<?= $article->categories2->colour ?>;width: 100%"><?= $article->categories2->name ?></div>
                        <?php endif; ?>
                    </div>
                    </div>

                    <h3><a href="/article/<?= $article->slug ?>"><?= $article->name ?></a></h3>
                    <ul class="list-inline grid-boxes-news">
                        <li><span>By</span> <a href="#">Staff</a></li>
                        <li>|</li>
                        <li><i class="fa fa-clock-o"></i> <?= $article->created ?> </li>
                        <li>|</li>
                        <!-- <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li> -->
                    </ul>
                    <p><?= $article->feature_text ?></p>
                </div>
            </div>

        <?php endforeach; ?>


          

            <div class="grid-boxes-in"> <!-- Ad Box --> 
            <!--        
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                     style="display:block;width:336px;height:280px; margin: auto"
                     data-ad-client="ca-pub-5569648086666006"
                     data-ad-slot="8475068701"></ins>
                <script> 
                // MaximumVenture - 336x280 square
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            -->
            </div>

           



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
