<?php
$agent = $model->getAgent()->one();
$images = $model->getImagesProperties()->orderBy('order')->all();
$extras = $model->getAccesspropertydetails()->all();
$cont = 1;
?>
<section class="section-dark no-padding">
    <!-- Slider main container -->
    <div id="swiper-gallery" class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($images as $i): ?>
                <div class="swiper-slide">
                    <div class="slide-bg swiper-lazy" data-background="<?= Yii::$app->request->baseUrl . "/uploads/property/" . $i->name; ?>" data-sub-html=""></div>
                    <!-- Preloader image -->
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-9 col-lg-8 slide-desc-col animated fadeInUp gallery-slide-desc-<?= $cont ?>">
                                <div class="gallery-slide-cont">
                                    <div class="gallery-slide-cont-inner">	
                                        <div class="gallery-slide-title pull-right">
                                            <h5 class="subtitle-margin"><?= $model->getType()->one()->type; ?> en <?= $model->getState()->one()->state; ?></h5>
                                            <h3><?= $model->address; ?><span class="special-color">.</span></h3>
                                        </div>
                                        <div class="gallery-slide-estate pull-right hidden-xs">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="gallery-slide-desc-price pull-right">
                                        <?= ($model->money === 'D') ? '$' : 'S/.'; ?> <?= $model->price; ?>
                                    </div>	
                                    <div class="clearfix"></div>
                                </div>	
                            </div>			
                        </div>
                    </div>
                </div>
            <?php $cont++; ?>
            <?php endforeach; ?>
        </div>

        <div class="slide-buttons slide-buttons-center">
            <a href="#" class="navigation-box navigation-box-next slide-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
            <div id="slide-more-cont"></div>
            <a href="#" class="navigation-box navigation-box-prev slide-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
        </div>

    </div>

</section>
<section class="thumbs-slider section-both-shadow">
    <div class="container">
        <div class="row">
            <div class="col-xs-1">
                <a href="#" class="thumb-box thumb-prev pull-left"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
            </div>
            <div class="col-xs-10">
                <!-- Slider main container -->
                <div id="swiper-thumbs" class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($images as $i): ?>
                            <div class="swiper-slide">
                                <img class="slide-thumb" src="<?= Yii::$app->request->baseUrl . "/uploads/property/sqr_" . $i->name; ?>" alt="">
                            </div>
                        <?php endforeach; ?>                        
                    </div>
                </div>
            </div>
            <div class="col-xs-1">
                <a href="#" class="thumb-box thumb-next pull-right"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
            </div>
        </div>
    </div>
</section>
<section class="section-light no-bottom-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                        <div class="details-image pull-left hidden-xs">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="details-title pull-left">
                            <h5 class="subtitle-margin"><?= $model->getType()->one()->type; ?> en <?= $model->getState()->one()->state; ?></h5>
                            <h3><?= $model->address; ?><span class="special-color">.</span></h3>
                        </div>
                        <div class="clearfix"></div>	
                        <div class="title-separator-primary"></div>
                        <p class="details-desc"><?= $model->description; ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                        <div class="details-parameters-price"><?= ($model->money === 'D') ? '$' : 'S/.'; ?> <?= $model->price; ?></div>
                        <div class="details-parameters">
                            <div class="details-parameters-cont">
                                <div class="details-parameters-name">Area</div>
                                <div class="details-parameters-val"><?= isset($model->area) ? $model->area : 0; ?>m<sup>2</sup></div>
                                <div class="clearfix"></div>	
                            </div>
                            <div class="details-parameters-cont">
                                <div class="details-parameters-name">Cuartos</div>
                                <div class="details-parameters-val"><?= isset($model->bedrooms) ? $model->bedrooms : 0; ?></div>
                                <div class="clearfix"></div>	
                            </div>
                            <div class="details-parameters-cont">
                                <div class="details-parameters-name">Ba&ntilde;os</div>
                                <div class="details-parameters-val"><?= isset($model->bathrooms) ? $model->bathrooms : 0; ?></div>
                                <div class="clearfix"></div>	
                            </div>
                            <div class="details-parameters-cont">
                                <div class="details-parameters-name">Garajes</div>
                                <div class="details-parameters-val"><?= isset($model->garages) ? $model->garages : 0; ?></div>
                                <div class="clearfix"></div>	
                            </div>
                            <div class="details-parameters-cont">
                                <div class="details-parameters-name">Antig&uuml;edad</div>
                                <div class="details-parameters-val"><?= isset($model->yearsold) ? $model->yearsold : 0; ?></div>
                                <div class="clearfix"></div>	
                            </div>
                            <div class="details-parameters-cont">
                                <div class="details-parameters-name">Amoblado</div>
                                <div class="details-parameters-val"><?= ($model->furnished == 1) ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>'; ?></div>
                                <div class="clearfix"></div>	
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row margin-top-45">
                    <div class="col-xs-6 col-sm-4">
                        <ul class="details-ticks">
                            <?php foreach ($extras as $e): ?>
                                <?php
                                $pd = \app\models\PropertyDetail::findOne($e->property_detail_id);
                                ?>
                                <li><i class="jfont">&#xe815;</i><?= $pd->name ?></li>
                            <?php endforeach; ?>                              
                        </ul>
                    </div>
                </div>
                <div class="row margin-top-45">
                    <div class="col-xs-12 apartment-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab">
                                    <span>Mapa</span>
                                    <div class="button-triangle2"></div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab-street-view" aria-controls="tab-street-view" role="tab" data-toggle="tab">
                                    <span>Vista de la Calle</span>
                                    <div class="button-triangle2"></div>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-map">
                                <div id="estate-map" class="details-map"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-street-view">
                                <div id="estate-street-view" class="details-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-60">
                    <div class="col-xs-12">
                        <h3 class="title-negative-margin">Contacta al Agente<span class="special-color">.</span></h3>
                        <div class="title-separator-primary"></div>
                    </div>
                </div>
                <div class="row margin-top-60">
                    <div class="col-xs-8 col-xs-offset-2 col-sm-3 col-sm-offset-0">
                        <h5 class="subtitle-margin"><?= $agent->getProfile()->one()->name ?></h5>
                        <h3 class="title-negative-margin"><?= $agent->names . " " . $agent->surnames ?><span class="special-color">.</span></h3>
                        <a href="#" class="agent-photo">
                            <img src="<?= isset($agent->avatar) ? Yii::$app->request->baseUrl . "/uploads/user/" . $agent->avatar : Yii::$app->request->baseUrl . "/images/avatar-generic.jpg"; ?>" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="agent-social-bar">
                            <div class="pull-left">
                                <span class="agent-icon-circle">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <span class="agent-bar-text"><?= isset($agent->phone) ? $agent->phone : "No tiene"; ?></span>
                            </div>
                            <div class="pull-left">
                                <span class="agent-icon-circle">
                                    <i class="fa fa-envelope fa-sm"></i>
                                </span>
                                <span class="agent-bar-text"><?= isset($agent->email) ? $agent->email : "No tiene"; ?></span>
                            </div>
                            <div class="pull-right">
<!--                                <div class="pull-right">
                                    <a class="agent-icon-circle" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a class="agent-icon-circle icon-margin" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a class="agent-icon-circle icon-margin" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a class="agent-icon-circle icon-margin" href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </div>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <form name="contact-from" action="#">
                            <input name="name" type="text" class="input-long main-input" placeholder="Your name" />
                            <input name="phone" type="text" class="input-short pull-right main-input" placeholder="Your phone" />
                            <input name="mail" type="email" class="input-full main-input" placeholder="Your email" />
                            <textarea name="message" class="input-full agent-textarea main-input" placeholder="Your question"></textarea>
                            <div class="form-submit-cont">
                                <a href="#" class="button-primary pull-right">
                                    <span>send</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--                <div class="row margin-top-90">
                                    <div class="col-xs-12 col-sm-9">
                                        <h5 class="subtitle-margin">hot</h5>
                                        <h1>new listings<span class="special-color">.</span></h1>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <a href="#" class="navigation-box navigation-box-next" id="grid-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                                        <a href="#" class="navigation-box navigation-box-prev" id="grid-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="title-separator-primary"></div>
                                    </div>
                                </div>-->

                <!--                <div class="grid-offers-container">
                                    <div class="owl-carousel" id="grid-offers-owl">
                                        <div class="grid-offer-col">
                                            <div class="grid-offer">
                                                <div class="grid-offer-front">
                
                                                    <div class="grid-offer-photo">
                                                        <img src="images/grid-offer1.jpg" alt="" />
                                                        <div class="type-container">
                                                            <div class="estate-type">apartment</div>
                                                            <div class="transaction-type">sale</div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-offer-text">
                                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4></div>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="price-grid-cont">
                                                        <div class="grid-price-label pull-left">Price:</div>
                                                        <div class="grid-price pull-right">
                                                            $ 320 000
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="grid-offer-params">
                                                        <div class="grid-area">
                                                            <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                                                        </div>
                                                        <div class="grid-rooms">
                                                            <img src="images/rooms-icon.png" alt="" />3
                                                        </div>
                                                        <div class="grid-baths">
                                                            <img src="images/bathrooms-icon.png" alt="" />1
                                                        </div>							
                                                    </div>	
                
                                                </div>
                                                <div class="grid-offer-back">
                                                    <div id="grid-map1" class="grid-offer-map"></div>
                                                    <div class="button">	
                                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                                            <span>read more</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-col">
                                            <div class="grid-offer">
                                                <div class="grid-offer-front">
                                                    <div class="grid-offer-photo">
                                                        <img src="images/grid-offer2.jpg" alt="" />
                                                        <div class="type-container">
                                                            <div class="estate-type">apartment</div>
                                                            <div class="transaction-type">sale</div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-offer-text">
                                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4></div>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="price-grid-cont">
                                                        <div class="grid-price-label pull-left">Price:</div>
                                                        <div class="grid-price pull-right">
                                                            $ 299 000
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="grid-offer-params">
                                                        <div class="grid-area">
                                                            <img src="images/area-icon.png" alt="" />48m<sup>2</sup>
                                                        </div>
                                                        <div class="grid-rooms">
                                                            <img src="images/rooms-icon.png" alt="" />2
                                                        </div>
                                                        <div class="grid-baths">
                                                            <img src="images/bathrooms-icon.png" alt="" />1
                                                        </div>							
                                                    </div>	
                                                </div>
                                                <div class="grid-offer-back">
                                                    <div id="grid-map2" class="grid-offer-map"></div>
                                                    <div class="button">	
                                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                                            <span>read more</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-col">
                                            <div class="grid-offer">
                                                <div class="grid-offer-front">
                                                    <div class="grid-offer-photo">
                                                        <img src="images/grid-offer3.jpg" alt="" />
                                                        <div class="type-container">
                                                            <div class="estate-type">apartment</div>
                                                            <div class="transaction-type">sale</div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-offer-text">
                                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4></div>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="price-grid-cont">
                                                        <div class="grid-price-label pull-left">Price:</div>
                                                        <div class="grid-price pull-right">
                                                            $ 400 000
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="grid-offer-params">
                                                        <div class="grid-area">
                                                            <img src="images/area-icon.png" alt="" />93m<sup>2</sup>
                                                        </div>
                                                        <div class="grid-rooms">
                                                            <img src="images/rooms-icon.png" alt="" />4
                                                        </div>
                                                        <div class="grid-baths">
                                                            <img src="images/bathrooms-icon.png" alt="" />2
                                                        </div>							
                                                    </div>	
                                                </div>
                                                <div class="grid-offer-back">
                                                    <div id="grid-map3" class="grid-offer-map"></div>
                                                    <div class="button">	
                                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                                            <span>read more</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-col">
                                            <div class="grid-offer">
                                                <div class="grid-offer-front">
                                                    <div class="grid-offer-photo">
                                                        <img src="images/grid-offer4.jpg" alt="" />
                                                        <div class="type-container">
                                                            <div class="estate-type">house</div>
                                                            <div class="transaction-type">sale</div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-offer-text">
                                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4></div>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="price-grid-cont">
                                                        <div class="grid-price-label pull-left">Price:</div>
                                                        <div class="grid-price pull-right">
                                                            $ 800 000
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="grid-offer-params">
                                                        <div class="grid-area">
                                                            <img src="images/area-icon.png" alt="" />300m<sup>2</sup>
                                                        </div>
                                                        <div class="grid-rooms">
                                                            <img src="images/rooms-icon.png" alt="" />8
                                                        </div>
                                                        <div class="grid-baths">
                                                            <img src="images/bathrooms-icon.png" alt="" />3
                                                        </div>							
                                                    </div>	
                                                </div>
                                                <div class="grid-offer-back">
                                                    <div id="grid-map4" class="grid-offer-map"></div>
                                                    <div class="button">	
                                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                                            <span>read more</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-col">
                                            <div class="grid-offer">
                                                <div class="grid-offer-front">
                                                    <div class="grid-offer-photo">
                                                        <img src="images/grid-offer5.jpg" alt="" />
                                                        <div class="type-container">
                                                            <div class="estate-type">apartment</div>
                                                            <div class="transaction-type">sale</div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-offer-text">
                                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4></div>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="price-grid-cont">
                                                        <div class="grid-price-label pull-left">Price:</div>
                                                        <div class="grid-price pull-right">
                                                            $ 320 000
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="grid-offer-params">
                                                        <div class="grid-area">
                                                            <img src="images/area-icon.png" alt="" />50m<sup>2</sup>
                                                        </div>
                                                        <div class="grid-rooms">
                                                            <img src="images/rooms-icon.png" alt="" />2
                                                        </div>
                                                        <div class="grid-baths">
                                                            <img src="images/bathrooms-icon.png" alt="" />1
                                                        </div>							
                                                    </div>	
                                                </div>
                                                <div class="grid-offer-back">
                                                    <div id="grid-map5" class="grid-offer-map"></div>
                                                    <div class="button">	
                                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                                            <span>read more</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-col">
                                            <div class="grid-offer">
                                                <div class="grid-offer-front">
                                                    <div class="grid-offer-photo">
                                                        <img src="images/grid-offer7.jpg" alt="" />
                                                        <div class="type-container">
                                                            <div class="estate-type">house</div>
                                                            <div class="transaction-type">sale</div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-offer-text">
                                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4></div>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="price-grid-cont">
                                                        <div class="grid-price-label pull-left">Price:</div>
                                                        <div class="grid-price pull-right">
                                                            $ 500 000
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="grid-offer-params">
                                                        <div class="grid-area">
                                                            <img src="images/area-icon.png" alt="" />210m<sup>2</sup>
                                                        </div>
                                                        <div class="grid-rooms">
                                                            <img src="images/rooms-icon.png" alt="" />6
                                                        </div>
                                                        <div class="grid-baths">
                                                            <img src="images/bathrooms-icon.png" alt="" />2
                                                        </div>							
                                                    </div>	
                                                </div>
                                                <div class="grid-offer-back">
                                                    <div id="grid-map6" class="grid-offer-map"></div>
                                                    <div class="button">	
                                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                                            <span>read more</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                <div class="margin-top-45"></div>
            </div>
        </div>
    </div>
</section>
<?php $this->registerJs("mapInit($model->latitude, $model->longitude, 'estate-map', '".Yii::$app->request->baseUrl. app\assets\AppAsset::getIconPingProperty($model->getType()->one()->type). "', true);
                         streetViewInit($model->latitude, $model->longitude, 'estate-street-view');
", yii\web\View::POS_LOAD, uniqid()); ?>