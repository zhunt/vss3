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

/*
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
*/

//$this->layout = false;

/*
use Cake\Cache\Cache;
use Cake\Core\Configure;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;
*/
use Cake\Core\Configure;
?>


    <?php $this->assign('title', Configure::read('websiteName') . ' Legal'); ?>
    <?php $this->assign('meta_description', 'Website legal disclaimer for ' . Configure::read('websiteName')  ); ?>

    <?php //$this->assign('meta_index', 'noindex, follow' ); // e.g. for category pages ?>
 

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"><?= Configure::read('websiteName') ?> Website Disclaimer</h1>
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
                    
                    <p><b>No warranties</span></b></p>

                    <p>This website is provided “as is” without any representations or warranties, express or implied.  YYZtech Group Media Ltd. makes no representations or
                    warranties in relation to this website or the information and materials provided on this website.</p>
                    <p>Without prejudice to the generality of the foregoing paragraph, YYZtech Group Media Ltd. does not warrant that:</p>
                    <p>this website will be constantly available, or available at all; or</p>
                    <p>the information on this website is complete, true, accurate or non-misleading.</p>
                    <p>Nothing on this website constitutes, or is meant to constitute, advice of any kind.</p>

                    <p><b>Limitations of liability</span></b></p>
                    <p>YYZtech Group Media Ltd. will not be liable to you (whether under the law of contract, the law of torts or otherwise) in relation to the contents of, or
                    use of, or otherwise in connection with, this website:</p>
                    <p>[to the extent that the website is provided free-of-charge, for any direct loss;]</p>
                    <p>for any indirect, special or consequential loss; or</p>
                    <p>for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships,
                    loss of reputation or goodwill, or loss or corruption of information or data.</p>
                    <p>These limitations of liability apply even if YYZtech Group Media Ltd. has been expressly advised of the potential loss.</p>

                    <p><b>Exceptions</span></b></p>
                    <p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or
                    limit; and nothing in this website disclaimer will exclude or limit YYZtech Group Media Ltd.'s liability in respect of any:</p>
                    <p>death or personal injury caused by YYZtech Group Media Ltd.'s negligence;</p>
                    <p>fraud or fraudulent misrepresentation on the part of YYZtech Group Media Ltd.; or</p>
                    <p>matter which it would be illegal or unlawful for YYZtech Group Media Ltd. to exclude or limit, or to attempt or purport to exclude or limit, its liability.</p>

                    <p><b>Reasonableness</span></b></p>

                    <p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.  </p>
                    <p>If you do not think they are reasonable, you must not use this website.</p>


                    <p><b>Other parties</span></b></p>
                    <p>[You accept that, as a limited liability entity, YYZtech Group Media Ltd. has an interest in limiting the personal liability of its officers and employees.  You agree that you will not bring any claim personally against YYZtech Group Media Ltd.'s officers or employees in respect of any losses you suffer in connection with the website.]</p>
                    <p>[Without prejudice to the foregoing paragraph,] you agree that the limitations of warranties and liability set out in this website disclaimer will protect YYZtech Group Media Ltd.'s officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as YYZtech Group Media Ltd.</p>

                    <p><b>Unenforceable provisions</span></b></p>
                    <p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>

                    <p><b>Credit</span></b></p>
                    <p>This document was created using a Contractology template available at <a href="http://www.freenetlaw.com/" target="_blank">http://www.freenetlaw.com</a></p>

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