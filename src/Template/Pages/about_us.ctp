<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;


//$this->layout = false;

/*
use Cake\Cache\Cache;
use Cake\Core\Configure;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;
*/
?>


    <?php $this->assign('title', 'About ' . Configure::read('websiteName') ); ?>
    <?php $this->assign('meta_description', 'Whis is ' .Configure::read('websiteName') . '?' ); ?>

    <?php //$this->assign('meta_index', 'noindex, follow' ); // e.g. for category pages ?>
 

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">About <?= Configure::read('websiteName') ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <!--
                <li><a href="">Blog</a></li>
                <li class="active">Blog Item 1</li>
                -->
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row blog-page blog-item">
            <!-- Left Sidebar -->
            <div class="col-md-9 md-margin-bottom-60">
                <!--Blog Post-->
                <div class="blog margin-bottom-40">
                    <!-- h2><a href="blog_item_option1.html"><?= h($article->name) ?></a></h2 -->
                    <div class="blog-post-tags">
                        
                        
                    </div>
                    <!-- 
                    <div class="blog-img">
                        <img class="img-responsive" src="assets/img/sliders/11.jpg" alt="">
                    </div>
                    -->
                    

                           
                           
                            <p>
                              <b>MaximumVenture.ca was started in late 2015</b> with the goals of providing news on all aspects of the Canadian business landscape from small business and personal finance to major industries from coast to coast to coast.
                            </p>

                            <p>The name <b>Maximum Venture</b> comes from two sources: The TV show Venture which was a seminal Canadian business show that aired on the CBC in the late 1980s, that similarly aimed to cover all aspects of the Canadian business scene, and Suketu Mehta's book Maximum City about the city of Bombay/Mumbai.</p>

                            <p>
                                <b>In The Media:</b>
                                <ul>
                                    <li><a href="http://bizpr.co.uk/2016/06/15/maximum-venture-launches-bring-canada-business-news-world/" target="_blank">bizPR.co.uk: Maximum Venture Launches to Bring Canada Business News to the World</a</li>
                                    <li><a href="http://new-release.press/maximum-venture-launches-to-bring-canadas-its-business-news/" target="_blank">new-release.press: Maximum Venture Launches</a></li>
                                    <li><a href="http://markets.financialcontent.com/stocks/news/read/32300671" target="_blank">financialcontent.com: Maximum Venture Launches</a></li>
                                    <li><a href="http://www.release-news.com/business/maximum-venture-launches-to-bring-canada-business-news-to-the-world" target="_blank">release-news.com: Maximum Venture Launches</a></li>
                                </ul>
                            </p>
                            
                            <p>
                                <b>How we built MaximumVenture:</b>
                                <ul>
                                    <li><a href="https://www.digitalocean.com/?refcode=513f08a218eb" target="_blank">Hosting by DigitalOcean</a></li>

                                    <li><a href="https://hover.com/JTY5ohDc" target="_blank">Domain by Hover.com</a></li>

                                </ul>
                            </p>


                </div>
                <!--End Blog Post-->

                <hr>
                <!-- comment form here -->

                <!-- End Comment Form -->
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            <div class="col-md-3 magazine-page">
                <!-- Search Bar -->
                <!--
                <div class="headline headline-md"><h2>Search</h2></div>
                <div class="input-group margin-bottom-40">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn-u" type="button">Go</button>
                    </span>
                </div>
                -->
                <!-- End Search Bar -->



               

               

                


            </div>
            <!-- End Right Sidebar -->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->