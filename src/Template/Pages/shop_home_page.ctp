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
if (!Configure::read('debug')):
    throw new NotFoundException();
endif;
*/
?>


    <?php $this->assign('title', 'Bar Supplies Store'); ?>
    <?php $this->assign('meta_description', 'A selection of products for bartenders.' ); ?>
    <?php // $this->assign('canonical',  $article->canonical ); ?>


    <style>
        .prod_offset { padding-top: 29px} 
        .eshop-product { background-color: #fff}
        .eshop-product-body ul, .eshop-product-body li { margin-left: .5em;
    padding-left: 0;
    list-style-position: outside;}
    </style>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- ==========================
        BREADCRUMB - START 
    =========================== -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <h2>Bar Supplies Store Online</h2>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/page/shop-home-page">Store</a></li>
                
            </ol>
        </div>
    </section>

    <!-- ==========================
        BREADCRUMB - END 
    =========================== -->
 
    <!-- ==========================
        ESHOP - START 
    =========================== -->
    <section class="content bg-color-2 portfolio-col-3" id="portfolio" style="padding-bottom: 0">
        <div class="container">
            <div class="isotope-filter portfolio-filter">

                <h1>Welcome To Our Bartending Supplies Store</h1>

                <p>Currently we have a few types of items available:</p>

                <h4>Cocktail strainers</h4>
                <p>There's three types of strainers: <b>Julep Strainer</b> (good for beginners, easy to control), the <b>Hawthorne Strainer</b> (most flexible, but easier to break than the Julep), and Fine Mesh Strainer (good for seriously smooth drinks).</p>

                <h4>Bartending Books</h4>
                <p>Here's some books you might like.</p>



            </div>
        </div>
    </section>

        <!-- **Cocktail Strainers

OXO SteeL Cocktail Strainer (Hawthorne)

True Fabrications 2529 Cocktail Strainer (Hawthorne)

Excellante Julep Strainer 
-->

        <div class="container">
            <h2 class="text-center">Cocktail Strainers</h2>
            <h4 class="text-center">Here's two Hawthorne and Juleps for different budgets.</h4>

            <div class="row eshop-main eshop-grid">
                <!-- ESHOP CONTENT - START -->
                <div class="col-md-12 eshop-content">
                    <div class="row">
                    
                        <!-- OXO SteeL Cocktail Strainer -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: 5</span>
                                    <span class="label label-danger">Top Rated</span>
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/B0000DAQ93/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=B0000DAQ93&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0000DAQ93&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B0000DAQ93" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />


                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/B0000DAQ93/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B0000DAQ93&linkCode=as2&tag=bartendertca-20">OXO SteeL Cocktail Strainer</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B0000DAQ93" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                    </h3>
                                    <p>By: OXO Good Grips (Japanese import)</p>
                                    <ul class="l/ist-unstyled">
                                        <li>Elegant brushed stainless steel</li>
                                        <li>Raised lip prevents liquids from dripping down sides of glass forcing liquid through spring</li>
                                        <li>Dishwasher safe</li>
                                    </ul>
                                    <div class="product-price clearfix">
                                        <span class="new-price">$26.21</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" target="_blank" href="http://www.amazon.ca/gp/product/B0000DAQ93/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B0000DAQ93&linkCode=as2&tag=bartendertca-20"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <!-- True Fabrications 2529 Cocktail Strainer -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: 4.5</span>
                                    <span class="label label-danger">Value</span>
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/B0081HCXEK/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=B0081HCXEK&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0081HCXEK&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B0081HCXEK" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />


                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/B0081HCXEK/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B0081HCXEK&linkCode=as2&tag=bartendertca-20">True Fabrications 2529 Cocktail Strainer</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B0081HCXEK" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />


                                    </h3>
                                    <p>By: True Fabrications</p>
                                    <ul class="l/ist-unstyled">
                                        <li>Cocktail strainer is made of high quality stainless steel</li>
                                        <li>Use in combination with any shaker to strain ice</li>
                                        <li>Two prong design fits on all standard shakers</li>
                                        <li>Make at home martinis with ease</li>
                                    </ul>
                                    <div class="product-price clearfix">
                                        <span class="new-price">$17.37</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" href="http://www.amazon.ca/gp/product/B0081HCXEK/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B0081HCXEK&linkCode=as2&tag=bartendertca-20" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <!-- Winco Stainless Steel Julep Strainer -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: New</span>
                                    <span class="label label-danger">Value</span>
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/B000HLSB7G/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=B000HLSB7G&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000HLSB7G&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B000HLSB7G" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/B000HLSB7G/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B000HLSB7G&linkCode=as2&tag=bartendertca-20">Winco Stainless Steel Julep Strainer</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B000HLSB7G" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                    </h3>
                                    <p>By: Winco</p>
                                    <ul class="l/ist-unstyled">
                                        <li>Perforated spoon especially for straining crushed mint leaves for mint julep</li>
                                        <li>Can be used for strainer pulp and seeds for other cocktail drinks</li>
                                        <li>Essential piece in any barware collection</li>
                                        <li>Stainless steel</li>
                                        <li>Dishwasher safe</li>
                                    </ul>
                                    <div class="product-price clearfix">
                                        <span class="new-price">$7.32</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" href="http://www.amazon.ca/gp/product/B000HLSB7G/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B000HLSB7G&linkCode=as2&tag=bartendertca-20" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bartender's Stainless Steel Professional Grade Julep Strainer -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: New</span>
                                    <span class="label label-danger">Quality</span>
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/B00DJXVZZY/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=B00DJXVZZY&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B00DJXVZZY&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B00DJXVZZY" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />


                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/B00DJXVZZY/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B00DJXVZZY&linkCode=as2&tag=bartendertca-20">Bartender's Stainless Steel Professional Grade Julep Strainer</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=B00DJXVZZY" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />


                                    </h3>
                                    <p>By: Franmara</p>
                                    <ul class="l/ist-unstyled">
                                        <li>Perfect gift for those that love Bar & Wine Accessory</li>
                                        <li>Measurement: H: 6.25 x W: 3.12</li>
                                    </ul>
                                    <div class="product-price clearfix">
                                        <span class="new-price">$27.04</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" href="http://www.amazon.ca/gp/product/B00DJXVZZY/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=B00DJXVZZY&linkCode=as2&tag=bartendertca-20" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- ESHOP CONTENT - END -->
            </div>
            
        </div>

        <div class="container">
            <h2 class="text-center">Books</h2>
            <h4 class="text-center">Here's some bar books we recommend.</h4>

            <div class="row eshop-main eshop-grid">
                <!-- ESHOP CONTENT - START -->
                <div class="col-md-12 eshop-content">
                    <div class="row">


                        <!-- The Curious Bartender -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: 5</span>
                                    <!-- span class="label label-danger">Quality</span -->
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/1849754373/ref=as_li_qf_sp_asin_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=1849754373&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=1849754373&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=1849754373" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/1849754373/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=1849754373&linkCode=as2&tag=bartendertca-20">The Curious Bartender: The Artistry and Alchemy of Creating the Perfect Cocktail</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=1849754373" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                    </h3>
                                    <p>By: Tristan Stephenson</p>
                                    <!--
                                    <ul>
                                        <li>Perfect gift for those that love Bar & Wine Accessory</li>
                                        <li>Measurement: H: 6.25 x W: 3.12</li>
                                    </ul>
                                    -->
                                    <div class="product-price clearfix">
                                        <span class="new-price">$26.21</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" href="http://www.amazon.ca/gp/product/1849754373/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=1849754373&linkCode=as2&tag=bartendertca-20" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <!-- The Joy of Mixology: The Consummate Guide to the Bartender's Craft -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: 4</span>
                                    <!-- span class="label label-danger">Quality</span -->
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/0609608843/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=0609608843&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=0609608843&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset"></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=0609608843" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/0609608843/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=0609608843&linkCode=as2&tag=bartendertca-20">The Joy of Mixology: The Consummate Guide to the Bartender's Craft</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=0609608843" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                    </h3>
                                    <p>By: Gary Regan</p>
                                    <!--
                                    <ul>
                                        <li>Perfect gift for those that love Bar & Wine Accessory</li>
                                        <li>Measurement: H: 6.25 x W: 3.12</li>
                                    </ul>
                                    -->
                                    <div class="product-price clearfix">
                                        <span class="new-price">$33.75</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" href="http://www.amazon.ca/gp/product/0609608843/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=0609608843&linkCode=as2&tag=bartendertca-20" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <!-- Cocktail Technique -->
                        <div class="col-md-3 col-sm-6">
                            <div class="eshop-product">
                                <div class="product-tags pull-left">
                                    <span class="label label-info">Rating: 4</span>
                                    <!-- span class="label label-danger">Quality</span -->
                                </div>

                                <a rel="nofollow" href="http://www.amazon.ca/gp/product/1603112146/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=1603112146&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=1603112146&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" class="img-responsive prod_offset" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=1603112146" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

                                <div class="eshop-product-body">
                                    <h3>
                                        <a rel="nofollow" href="http://www.amazon.ca/gp/product/1603112146/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=1603112146&linkCode=as2&tag=bartendertca-20">Cocktail Technique</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=as2&o=15&a=1603112146" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                    </h3>
                                    <p>By: Kazuo Uyeda </p>
                                    <ul>
                                        <li>Hardcover</li>
                                        <li>Size: 18.8 x 11.7 x 2.3 cm</li>
                                    </ul>
                                   
                                    <div class="product-price clearfix">
                                        <span class="new-price">$83.15</span>
                                        <a class="btn btn-danger btn-sm addtocart pull-right" href="http://www.amazon.ca/gp/product/1603112146/ref=as_li_tf_tl?ie=UTF8&camp=15121&creative=330641&creativeASIN=1603112146&linkCode=as2&tag=bartendertca-20" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        <p class="text-center"><b><i>* Note: All products are via <a target="_blank" rel="nofollow" href="http://www.amazon.ca/b?_encoding=UTF8&camp=15121&creative=330641&linkCode=ur2&node=2224068011&site-redirect=&tag=bartendertca-20">Amazon Canada</a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=bartendertca-20&l=ur2&o=15" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />, no U.S. shipping hassles.</i></b></p>

    </section>


