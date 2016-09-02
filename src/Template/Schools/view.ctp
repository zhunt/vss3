    <?php 
    if ( isset($school->seo_title) && !empty($school->seo_title) ) {
        $this->assign('title', $school->seo_title ); 
    } else { 
        $this->assign('title', $school->name ); 
    }
    ?>
    <?php $this->assign('meta_description', $school->name . ' in ' . $school->city->name . ', ' .  $school->city->province->name ); ?>
    <?php $this->assign('canonical', $canonical  ); ?>


<!--
    <style>
    /* Flexible iFrame */

    .Flexible-container {
        position: relative;
        padding-bottom: 100%; 
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .Flexible-container iframe,   
    .Flexible-container object,  
    .Flexible-container embed,
    .Flexible-container #map-canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Flexible iFrame */
    </style>
-->

   <!-- ==========================
        BREADCRUMB - START 
    =========================== -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <h2>Bartending School Profile</h2>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/cities/">Cities</a></li>
                <li class="active"><a href="/city/<?= $school->city->slug ?>"><?= $school->city->name ?></a></li>
            </ol>
        </div>
    </section>
    <!-- ==========================
        BREADCRUMB - END 
    =========================== -->

 
    <!-- ==========================
        MEMBER PROFILE - START 
    =========================== -->      
    <section class="content bg-color-2" id="profile-single">
        <div class="container">
            <div class="row">
            
                <!-- Profile -->
                <div class="col-sm-7 col-md-7">
                    <div class="profile-body">
                        <article>
                            <h1><?= h($school->name) ?></h1>
                            <?= Parsedown::instance()->text($school->description); ?>

                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- bartenderTraining-adblock1 -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-5569648086666006"
                                 data-ad-slot="5270749504"
                                 data-ad-format="auto"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>

                            <ul class="profile-contacts list-unstyled">
                                <!-- <li><span>e</span>johndoe@website.com</li> -->
                                <li><span>t</span><?= h($school->phone_1) ?></li>
                                <?php if ( !empty($school->phone_2) ): ?>
                                <li><span>t</span><?= h($school->phone_2) ?></li>
                                <?php endif;?>
                                <li><span>h</span><?= h($school->address) ?></li>
                                <li><span>w</span><a href="<?= $school->website_1_url ?>" target="_blank"><?= h($school->website_1_url) ?></a></li>
                                <?php if ( !empty($school->website_2_url) ): ?>
                                <li><span>t</span><a href="<?= $school->website_2_url ?>" target="_blank"><?= h($school->website_2_url) ?></a></li>
                                <?php endif;?>                            
                            </ul>
                        </article>    
                    </div>
                </div>
                
                <!-- Profile -->
                <div class="col-sm-12 col-xs-12 col-md-5">
                    <!-- img src="/image/avatar_01.jpg" alt="" class="img-responsive" -->
                    <!-- div id="map-canvas" class="img-responsive"></div -->
                    <!-- <div class="Flexible-container"> -->

                    

                        <div id="map-canvas" class="col-sm-12 col-lg-12 schoolMap" ></div> <!-- width="425" height="425" -->
                        <script>var geoCords = {lat:<?= $school->geo_latt ?>,lng:<?= $school->geo_long ?>,name:"<?= h(trim($school->name)) ?>",addr:"<?= h(trim($school->address)) ?>"};</script>

                        <?php echo $this->Html->script(
                            ['http://maps.google.com/maps/api/js?sensor=true', 
                            '/js/gmaps.min.js'], 
                            ['block' => true] ) ?>
                       
                        <!--
                         <script>
                        // tested code: 
                        var map;
                        $(document).ready(function(){
                            
                          map = new GMaps({
                            div: '#map-canvas',
                            lat: geoCords.lat,
                            lng: geoCords.lng
                          });
                         
                          map.addMarker({
                            lat: geoCords.lat,
                            lng: geoCords.lng,
                            title: geoCords.name,
                            infoWindow: {
                              content: "<p><b>" + geoCords.name + '</b><br>' + geoCords.addr + "</p>"
                            }
                          });
                        }); 
                         </script>
                        -->
                       
                        <?php $this->Html->scriptStart(['block' => true]); ?>

                        var map;$(document).ready(function(){map=new GMaps({div:"#map-canvas",lat:geoCords.lat,lng:geoCords.lng}),map.addMarker({lat:geoCords.lat,lng:geoCords.lng,title:geoCords.name,infoWindow:{content:"<p><b>"+geoCords.name+"</b><br>"+geoCords.addr+"</p>"}})});

                        <?php $this->Html->scriptEnd(); ?>
                        

                    <!-- </div> -->

                <!--
                    <ul class="brands brands-sm brands-inline brands-transition brands-circle main">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                -->
                    

                    <?php


                    $moreSchools = $this->cell('NearbySchools', ['provinceId' => $school->city->province->id, 'currentSchoolId' => $school->id  ]);
                    echo $moreSchools;

                    $recentArticles = $this->cell('RecentArticles');
                    echo $recentArticles;                    

                    ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center">We Recommend</h3>
                        </div>
                        <div class="panel-body text-center"> <!-- only room for one-->
                            <a rel="nofollow" href="http://www.amazon.ca/gp/product/1849754373/ref=as_li_tf_il?ie=UTF8&camp=15121&creative=330641&creativeASIN=1849754373&linkCode=as2&tag=bartendertca-20"><img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=1849754373&Format=_SL250_&ID=AsinImage&MarketPlace=CA&ServiceVersion=20070822&WS=1&tag=bartendertca-20" ></a><img src="http://ir-ca.amazon-adsystem.com/e/ir?t=simcoedicom-20&l=as2&o=15&a=1849754373" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                            
                        </div>
                    </div>

                   

                   

                </div>
                                
            </div>
        </div>
    </section>


    <!-- ==========================
        MEMBER PROFILE - END 
    =========================== -->




