<?php
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
use kartik\form\ActiveForm;
?>
<a id="start"></a>
<div class="site-aboutus">
    <!-- Page header -->	
    <!--    <header class="header3">
            <nav class="navbar main-menu-cont">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar1"></span>
                            <span class="icon-bar icon-bar2"></span>
                            <span class="icon-bar icon-bar3"></span>
                        </button>
                        <a href="index.html" title="" class="navbar-brand">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/logo-light.png" alt="Apartment - Premium Real Estate Template" />
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#start" class="scroll">Start</a></li>
                            <li><a href="#overview" class="scroll">Overview</a></li>
                            <li><a href="#rooms" class="scroll">Rooms</a></li>
                            <li><a href="#gallery" class="scroll">Gallery</a></li>
                            <li><a href="#neighbourhood" class="scroll">Neighbourhood</a></li>
                            <li><a href="#localization" class="scroll">Map</a></li>
                            <li><a href="#contact" class="special-color scroll">Shedule a visit</a></li>
                        </ul>
                    </div>
                </div>
            </nav> /.mani-menu-cont 	
        </header>-->

<!--    <section class="no-padding adv-search-section">
         Slider main container 
        <div id="swiper2" class="swiper-container">
            <div class="container swiper2-static-cont">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7 slide-desc-col animated slide-desc-2 fadeInUp swiper2-static-desc">
                        <div class="slide-desc">
                            <div class="slide-desc-text">
                                <div class="estate-type">villa</div>
                                <div class="transaction-type">sale</div>
                                <h4>West Fourth Street, New York 10003, USA</h4>
                                <div class="clearfix"></div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="slide-desc-params">	
                                <div class="slide-desc-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />457m<sup>2</sup>
                                </div>
                                <div class="slide-desc-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />9
                                </div>
                                <div class="slide-desc-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />3
                                </div>	
                                <div class="slide-desc-parking">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/parking-icon.png" alt="" />2
                                </div>	
                            </div>
                            <div class="slide-desc-price">
                                $ 650 000
                            </div>		
                            <div class="clearfix"></div>										
                        </div>
                        <a href="#contact" class="shedule scroll">Shedule a visit</a>
                        <div class="slide-buttons slide-buttons-right">
                            <a href="#" class="navigation-box navigation-box-next slide-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                            <div class="navigation-box navigation-box-more slide-more"><div class="navigation-box-icon"></div></div>
                            <a href="#" class="navigation-box navigation-box-prev slide-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

             Additional required wrapper 
            <div class="swiper-wrapper">
                 Slides 
                <div class="swiper-slide swiper-lazy" data-background="<?= Yii::$app->request->baseUrl; ?>/images/slides/1.jpg">

                </div>
                <div class="swiper-slide swiper-lazy" data-background="<?= Yii::$app->request->baseUrl; ?>/images/slides/5.jpg">

                </div>
                <div class="swiper-slide swiper-lazy" data-background="<?= Yii::$app->request->baseUrl; ?>/images/slides/3.jpg">

                </div>
                <div class="swiper-slide swiper-lazy" data-background="<?= Yii::$app->request->baseUrl; ?>/images/slides/4.jpg">

                </div>
                <div class="swiper-slide swiper-lazy" data-background="<?= Yii::$app->request->baseUrl; ?>/images/slides/8.jpg">

                </div>
                <div class="swiper-slide swiper-lazy" data-background="<?= Yii::$app->request->baseUrl; ?>/images/slides/10.jpg">

                </div>
            </div>
        </div>
    </section>-->

    <a id="overview"></a>
    <section class="section-light bottom-padding-45 section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">Asesor&iacute;a Inmobiliaria</h5>
                    <h1 class="">¿Qui&eacute;nes Somos?<span class="special-color">.</span></h1>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="container margin-top-60">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 text-center">
                    <p class="negative-margin"><?php echo htmlspecialchars("AIA AGENCIA DE ASESORÍA INMOBILIARIA, ES UNA EMPRESA QUE SE LANZA AL MERCADO INMOBILIARIO CON UNA GRAN PROYECCIÓN E INVERSIÓN, CONTANDO CON UN EQUIPO DE COLABORADORES, PROFESIONALES INMOBILIARIOS ESPECIALIZADOS, DEDICADOS A BRINDAR SERVICIOS TALES COMO ASESORAMIENTO INMOBILIARIO, LEGAL Y COMERCIAL, PARA LA COMPRA VENTA Y ALQUILER DE INMUEBLES, GARANTIZANDO ASI QUE NUESTROS CLIENTES REALICEN OPERACIONES CONFIABLES Y SEGURAS."); ?></p>
                    <div class="swiper2-buttons margin-top-30">
                        <a href="#localization" class="button-secondary button-shadow scroll">
                            <span>Ver en el mapa</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-map-marker fa-lg"></i></div>
                        </a>

                        <a href="#contact" class="button-fourth button-shadow scroll">
                            <span>Agenda una visita</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-calendar-check-o"></i></div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section class="section-light bottom-padding-45 section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="feature wow fadeInLeft" id="feature1" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="feature-icon center-block"><i class="fa fa-check"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">aia</h5>
                            <h3>misi&Oacute;n<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p><?php echo htmlspecialchars("EN AIA TENEMOS LA MISIÓN DE BRINDAR UN SERVICIO INTEGRAL EN ASESORÍA INMOBILIARIA, EN  COLABORACIÓN CON PROFESIONALES ESPECIALIZADOS, QUE MEDIANTE CONSTANTES CAPACITACIONES OBTIENEN UN ALTO GRADO  DE CALIDAD, CON LA ÚNICA FINALIDAD DE OBTENER LA SATISFACCIÓN DE NUESTROS CLIENTES."); ?></p>
                        </div>
                    </div>
                </div>			
                <div class="col-sm-12 col-lg-6">
                    <div class="feature wow fadeInRight" id="feature2" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="feature-icon center-block"><i class="fa fa-check"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">aia</h5>
                            <h3>visi&Oacute;n<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p><?php echo htmlspecialchars("NUESTRA VISIÓN EN POSICIONARNOS EN EL MERCADO PERUANO DE BIENES RAICES COMO UNA EMPRESA LIDER, LLEGANDO A SER LA PRIMERA Y MEJOR OPCIÓN PARA QUIENES REQUIERAN REALIZAR OPERACIONES INMOBILIARIAS."); ?></p>
                        </div>
                    </div>
                </div>			
            </div>
        </div>
    </section>

<!--    <section class="section-color top-padding-45 bottom-padding-45 section-bottom-shadow">
        <div class="container">
            <div class="row count-container count-second-color">
                <div class="col-xs-6 col-lg-3">
                    <div class="number wow fadeInLeft" id="number5">
                        <div class="number-img">	
                            <i class="fa fa-calendar"></i>
                        </div>
                        <span class="number-label text-color2">BUILT YEAR</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="2012" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number wow fadeInUp" id="number6">
                        <div class="number-img">	
                            <i class="fa fa-arrows-alt"></i>
                        </div>			
                        <span class="number-label text-color2">AREA m<sup>2</sup></span>
                        <span class="number-big text-color3 count" data-from="0" data-to="457" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border3">
                    <div class="number wow fadeInUp" id="number7">
                        <div class="number-img">	
                            <i class="fa fa-bed"></i>
                        </div>
                        <span class="number-label text-color2">BEDROOMS</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="9" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number wow fadeInRight" id="number8">
                        <div class="number-img">
                            <i class="fa fa-car"></i>
                        </div>
                        <span class="number-label text-color2">PARKING PLACES</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="3" data-speed="2000"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container margin-top-30">
            <div class="row">
                <div class="col-xs-6 col-lg-3">
                    <ul class="custom-ul ul-second-color">
                        <li><span class="custom-ul-bullet"></span>SWIMMING POOL</li>
                        <li><span class="custom-ul-bullet"></span>GARDEN 3000m<sup>2</sup></li>
                        <li><span class="custom-ul-bullet"></span>GARAGE 2 CARS</li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <ul class="custom-ul ul-second-color">
                        <li><span class="custom-ul-bullet"></span>LAUNDRY ROOM</li>
                        <li><span class="custom-ul-bullet"></span>SECURITY SYSTEM</li>
                        <li><span class="custom-ul-bullet"></span>AIR CONDITION</li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <ul class="custom-ul ul-second-color">
                        <li><span class="custom-ul-bullet"></span>FULLY FURNISHED</li>
                        <li><span class="custom-ul-bullet"></span>WIFI</li>
                        <li><span class="custom-ul-bullet"></span>SOLAR SYSTEM</li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <ul class="custom-ul ul-second-color">
                        <li><span class="custom-ul-bullet"></span>FLOORS 3</li>
                        <li><span class="custom-ul-bullet"></span>BASEMENT</li>
                        <li><span class="custom-ul-bullet"></span>WINE CELLAR</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>	-->

    <!--<a id="rooms"></a>-->	
<!--    <section class="rooms parallax">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">property</h5>
                    <h1 class="">details<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="container margin-top-60">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="panel-group panel-apartment" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>LIVING ROOM</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details1.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>DINING ROOM</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details2.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>KITCHEN</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details3.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>BEDROOM 1</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details4.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span>BEDROOM 2</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details5.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span>BEDROOM 3</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details6.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <span>BATHROOMS</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details7.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <span>GARAGE</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont">&#xe801;</i></div>
                                </a>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/room-details8.jpg" alt="" class="p-image img-responsive" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="row margin-top-30">
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-6">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                        <li><i class="jfont">&#xe815;</i>nostrud exercitation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>	
                </div>
            </div>
        </div>
    </section>-->

    <!--<a id="gallery"></a>-->
<!--    <section class="section-light section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">property</h5>
                    <h1 class="">photo gallery<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="container gallery-filter-cont margin-top-60">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="gallery-filter" data-filter="*">All</div>
                    <div class="gallery-filter" data-filter=".living">LIVING ROOM</div>
                    <div class="gallery-filter" data-filter=".dining">DINING ROOM</div>
                    <div class="gallery-filter" data-filter=".kitchen">KITCHEN</div>
                    <div class="gallery-filter" data-filter=".bedroom1">BEDROOM 1</div>
                    <div class="gallery-filter" data-filter=".bedroom2">BEDROOM 2</div>
                    <div class="gallery-filter" data-filter=".bedroom3">BEDROOM 3</div>
                    <div class="gallery-filter" data-filter=".bathrooms">BATHROOMS</div>
                    <div class="gallery-filter" data-filter=".garage">GARAGE</div>
                </div>
            </div>
        </div>

        <div class="gallery-grid">
            <div class="gallery-grid-sizer"></div>
            <div class="gallery-grid-lg">
                <a href="images/gallery/gallery1.jpg" class="gallery-grid-item living dining bedroom2" data-sub-html="Living room"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery1-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery2.jpg" class="gallery-grid-item dining garage bedroom3" data-sub-html="Dining room"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery2-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery3.jpg" class="gallery-grid-item kitchen living bedroom3" data-sub-html="Living room"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery3-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery4.jpg" class="gallery-grid-item bedroom1 kitchen dining" data-sub-html="Kitchen"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery4-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery5.jpg" class="gallery-grid-item living bedroom1 garage" data-sub-html="Bedroom 1"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery5-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery6.jpg" class="gallery-grid-item dining bedroom3 bathrooms" data-sub-html="Bedroom 2"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery6-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery7.jpg" class="gallery-grid-item kitchen bedroom2" data-sub-html="Bedroom 3"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery7-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
                <a href="images/gallery/gallery8.jpg" class="gallery-grid-item bedroom1 bedroom2 bathrooms" data-sub-html="Bathroom"><img src="<?= Yii::$app->request->baseUrl; ?>/images/gallery/gallery8-thumb.jpg" alt="" /><span>living room<br/><i class="fa fa-search-plus"></i></span><div class="big-triangle"></div></a>
            </div>
        </div>

    </section>  -->

    <a id="localization"></a>
    <section class="contact-page-1 section-dark no-padding">
        <div id="contact-map1"></div>
        <div class="contact1-cont">
            <a id="contact"></a>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <div class="contact3 wow fadeInUp">
                            <div class="row">
                                <div class="col-xs-12 col-lg-12 text-center">
                                    <h5 class="subtitle-margin">contactanos</h5>
                                    <h1 class="">Agenda una visita<span class="special-color">.</span></h1>
                                </div>
                                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                                    <div class="title-separator-primary2"></div>
                                </div>
                            </div>
                            <div class="row margin-top-60">
                                <div class="col-xs-10 col-sm-4 col-xs-offset-1 col-sm-offset-0">
                                    <!--<h5 class="subtitle-margin">agent</h5>-->
                                    <h3 class="title-negative-margin">comunicate<span class="special-color">.</span></h3>
                                    <a href="#" class="agent-photo">
                                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent3.jpg" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="agent-social-bar">
                                        <div class="pull-left">
                                            <span class="agent-icon-circle">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <span class="agent-bar-text">+51(01)4785767</span>
                                        </div>
                                        <div class="pull-left">
                                            <span class="agent-icon-circle">
                                                <i class="fa fa-envelope fa-sm"></i>
                                            </span>
                                            <span class="agent-bar-text">informes@aia.com.pe</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="pull-right">
                                                <a class="agent-icon-circle" target="_blank" href="https://www.facebook.com/aia.agenciadeasesoriainmobiliaria">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </div>
                                            <!--                                            <div class="pull-right">
                                                                                            <a class="agent-icon-circle icon-margin" href="#">
                                                                                                <i class="fa fa-twitter"></i>
                                                                                            </a>
                                                                                        </div>-->
                                            <!--                                            <div class="pull-right">
                                                                                            <a class="agent-icon-circle icon-margin" href="#">
                                                                                                <i class="fa fa-google-plus"></i>
                                                                                            </a>
                                                                                        </div>-->
                                            <div class="pull-right">
                                                <a class="agent-icon-circle icon-margin" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <?php
                                    $form = ActiveForm::begin([
                                                'id' => 'contactus-form',
//                                'type' => ActiveForm::TYPE_HORIZONTAL,
//                                'options' => ['enctype' => 'multipart/form-data']
                                    ]);
                                    ?>
                                    <?= $form->field($model, 'name')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Tu nombre'])->label(false) ?>

                                    <?= $form->field($model, 'phone')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Tu telefono'])->label(false) ?>

                                    <?= $form->field($model, 'email')->textInput(['class' => 'input-full contact-textarea main-input', 'placeholder' => 'Tu correo electronico'])->label(false) ?>

                                    <?= $form->field($model, 'body')->textArea(['rows' => 6, 'class' => 'input-full contact-textarea main-input', 'placeholder' => 'Cual es tu consulta?'])->label(false) ?>
                                    <!--<div class="form-submit-cont">-->
                                    <a href="javascript:document.getElementById('contactus-form').submit();" class="button-primary" id="form-submit">
                                        <span>Enviar</span>
                                        <div class="button-triangle"></div>
                                        <div class="button-triangle2"></div>
                                        <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                    </a>
                                    <div class="clearfix"></div>
                                    <!--</div>-->
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    <footer class="small-cont">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 small-cont">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/logo-light.png" alt="" class="img-responsive footer-logo" />
                    </div>
                    <div class="col-xs-12 col-md-6 footer-copyrights">
                        &copy; Copyright 2015 <a href="http://themeforest.net/user/johnnychaos?ref=johnnychaos" target="blank">Jan Skwara</a>. All rights reserved. Buy on <a href="http://themeforest.net/user/johnnychaos/portfolio?ref=johnnychaos" target="blank">Themeforest</a>.
                    </div>
                </div>
            </div>
        </footer>    -->
</div>
<!-- Google Maps -->


<!-- google maps initialization -->
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        mapInit(-12.1156075, -77.0313685, "contact-map1", "<?= Yii::$app->request->baseUrl; ?>/images/pin-contact.png", true, true);
    }
</script>