<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

$this->title = 'AIA Inmobiliaria';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
        <meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
        <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
        <!-- Bootstrap -->
        <!--<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/bootstrap/bootstrap.min.css">-->    
        <!-- Font awesome styles -->    
        <!--<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/apartment-font/css/font-awesome.min.css">-->  
        <!-- Custom styles -->
        <!--<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/plugins.css">-->
        <!--<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/apartment-layout.css">-->
        <!--<link id="skin" rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/apartment-colors-blue.css">-->
        <!-- Custom styles -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
        <?php $this->head() ?>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->   
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <!-- Google Maps -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places"></script>
<!-- jQuery  -->
        <!--<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/js/jQuery/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/js/jQuery/jquery-ui.min.js"></script>-->
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="loader-bg"></div>
        <div id="wrapper">
            <!-- Page header -->	
            <header>
                <?php // echo var_dump(Yii::$app->user)  ?>
                <div class="top-bar-wrapper">
                    <div class="container top-bar">
                        <div class="row">
                            <div class="col-xs-5 col-sm-8">
                                <div class="top-mail pull-left hidden-xs">
                                    <span class="top-icon-circle">
                                        <i class="fa fa-envelope fa-sm"></i>
                                    </span>
                                    <span class="top-bar-text">informes@aia.com.pe</span>
                                </div>
                                <div class="top-phone pull-left hidden-xxs">
                                    <span class="top-icon-circle">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span class="top-bar-text">(0)-123-456-789</span>
                                </div>
                                <div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
                                    <span class="top-icon-circle pull-left">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span class="top-bar-text">Jesus Maria, San Miguel.</span>
                                </div>
                            </div>
                            <div class="col-xs-7 col-sm-4">
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <div class="top-social-last pull-right" data-toggle="tooltip" data-placement="bottom" title="Admin Site">
                                        <a class="top-icon-circle" href="<?= Url::toRoute("site/admin") ?>">
                                            <i class="fa fa-tachometer"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>                                  
                                <div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Login">
                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <a class="top-icon-circle" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-lock"></i>
                                        </a>
                                    <?php else: ?>                                        
                                        <a class="top-icon-circle" href="<?= Url::toRoute("site/logout") ?>" data-method="post">
                                            <i class="fa fa-sign-out"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.top-bar -->	
                </div><!-- /.Page top-bar-wrapper -->	
                <nav class="navbar main-menu-cont">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar1"></span>
                                <span class="icon-bar icon-bar2"></span>
                                <span class="icon-bar icon-bar3"></span>
                            </button>
                            <a href="<?= Url::toRoute("site/index") ?>" title="" class="navbar-brand">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/logo-dark.png" alt="AIA Inmobiliaria" />
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="button">
                                    <!--<a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>-->
                                    <a href="<?= Url::toRoute("site/index") ?>" class="" role="button" aria-haspopup="true" >Inicio</a>
                                    <!--                                    <ul class="dropdown-menu">
                                                                            <li><a href="index-2.html">Homepage 1 - slider</a></li>
                                                                            <li><a href="index-map.html">Homepage 1 - map</a></li>
                                                                            <li><a href="index2.html">Homepage 2 - slider</a></li>
                                                                            <li><a href="index2-map.html">Homepage 2 - map</a></li>
                                                                            <li><a href="index3.html">One Page Single Propery - slider</a></li>
                                                                            <li><a href="index3-street-view.html">One Page Single Propery - panorama!</a></li>
                                                                        </ul>-->
                                </li>
                                <li class="button">
                                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listings</a>-->
                                    <a href="<?= Url::toRoute("site/findproperty") ?>" class="" role="button" aria-haspopup="true" aria-expanded="true">Buscar Inmueble</a>
                                    <!--                                    <ul class="dropdown-menu">
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="listing-grid-right-sidebar.html">Grid Listing</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="listing-grid-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="listing-grid-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="listing-grid-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="listing-masonry-right-sidebar.html">Masonry Listing</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="listing-masonry-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="listing-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="listing-masonry-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="listing-list-right-sidebar.html">Classic Listing</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="listing-list-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="listing-list-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="listing-list-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="estate-details-right-sidebar.html">Single Property</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="estate-details-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="estate-details-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="estate-details-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>-->
                                </li>
                                <li class="button">
                                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agencies</a>-->
                                    <a href="<?= Url::toRoute("site/aboutus") ?>" class="" role="button" aria-haspopup="true" aria-expanded="true">Quienes Somos?</a>
                                    <!--                                    <ul class="dropdown-menu">
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="agencies-listing-right-sidebar.html">Agencies Listing</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="agencies-listing-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="agencies-listing-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="agencies-listing-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="agency-details-right-sidebar.html">Agency Details</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="agency-details-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="agency-details-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="agency-details-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="agents-right-sidebar.html">Agents List</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="agents-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="agents-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="agents-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="agent-right-sidebar.html">Agent Details</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="agent-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="agent-left-sidebar.html">Left Sidebar</a></li>
                                                                                    <li><a href="agent-no-sidebar.html">No Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>-->
                                </li>
                                <li class="button">
                                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>-->
                                    <!--<a href="<?= Url::toRoute("site/workwithus") ?>" class="" role="button" aria-haspopup="true" aria-expanded="false">Trabaja con nosotros</a>-->
                                    <!--                                    <ul class="dropdown-menu">
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="typography-no-sidebar.html">Typography &amp; Elements</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="typography-no-sidebar.html">No Sidebar</a></li>
                                                                                    <li><a href="typography-right-sidebar.html">Right Sidebar</a></li>
                                                                                    <li><a href="typography-left-sidebar.html">Left Sidebar</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li><a href="404.html">Error 404</a></li>
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="rtl-index.html">RTL Pages</a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="rtl-index.html">RTL Homepage</a></li>
                                                                                    <li><a href="rtl-page.html">RTL Estate details</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li role="separator" class="divider"></li>
                                                                            <li><a href="#login-modal" data-toggle="modal">Login</a></li>
                                                                            <li><a href="#register-modal" data-toggle="modal">Register</a></li>
                                                                            <li><a href="#forgot-modal" data-toggle="modal">Forgotten Password</a></li>
                                                                            <li role="separator" class="divider"></li>
                                                                            <li><a href="my-offers.html">My account - Offers</a></li>
                                                                            <li><a href="my-profile.html">My account - Profile</a></li>
                                                                        </ul>-->
                                </li>
                                <!--                                <li class="button">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                                                    <a href="#" class="" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="archive-grid.html">Default Grid</a></li>
                                                                        <li class="dropdown-submenu">
                                                                            <a tabindex="-1" href="archive-grid2-right-sidebar.html">Masonry Grid</a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a href="archive-grid2-right-sidebar.html">Right Sidebar</a></li>
                                                                                <li><a href="archive-grid2-left-sidebar.html">Left Sidebar</a></li>
                                                                                <li><a href="archive-grid2-no-sidebar.html">No Sidebar</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="dropdown-submenu">
                                                                            <a tabindex="-1" href="archive-right-sidebar.html">Classic List</a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a href="archive-right-sidebar.html">Right Sidebar</a></li>
                                                                                <li><a href="archive-left-sidebar.html">Left Sidebar</a></li>
                                                                                <li><a href="archive-no-sidebar.html">No Sidebar</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="dropdown-submenu">
                                                                            <a tabindex="-1" href="blog-right-sidebar.html">Single Post</a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                                                <li><a href="blog-no-sidebar.html">No Sidebar</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>-->
                                <li class="button">
                                    <a href="<?= Url::toRoute("site/contactus") ?>" class="" role="button" aria-haspopup="true" aria-expanded="false">Contactanos</a>
                                    <!--                                    <ul class="dropdown-menu">
                                                                            <li><a href="contact1.html">Contact version 1</a></li>
                                                                            <li><a href="contact2.html">Contact version 2</a></li>
                                                                        </ul>-->
                                </li>
                                <li><a href="<?= Url::toRoute("site/submitproperty") ?>" class="special-color">Agrega tu propiedad</a></li>
                            </ul>
                        </div>
                    </div>
                </nav><!-- /.mani-menu-cont -->	
            </header>

            <?= $content ?>

            <footer class="large-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-lg-3">
                            <h4 class="second-color">contact us<span class="special-color">.</span></h4>
                            <div class="footer-title-separator"></div>
                            <p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <address>
                                <span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
                                <div class="footer-separator"></div>
                                <span><i class="fa fa-envelope fa-sm"></i><a href="#">email@domain.tld</a></span>
                                <div class="footer-separator"></div>
                                <span><i class="fa fa-phone"></i>01-23456789</span>
                            </address>
                            <div class="clear"></div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-lg-3">
                            <h4 class="second-color">quick links<span class="special-color">.</span></h4>
                            <div class="footer-title-separator"></div>
                            <ul class="footer-ul">
                                <li><span class="custom-ul-bullet"></span><a href="index-2.html">Home</a></li>
                                <li><span class="custom-ul-bullet"></span><a href="listing-grid-right-sidebar.html">Listing</a></li>
                                <li><span class="custom-ul-bullet"></span><a href="agencies-listing-right-sidebar.html">Agencies</a></li>
                                <li><span class="custom-ul-bullet"></span><a href="archive-grid.html">Blog</a></li>
                                <li><span class="custom-ul-bullet"></span><a href="contact1.html">Contact us</a></li>
                                <li><span class="custom-ul-bullet"></span><a href="submit-property.html">Submit property</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <h4 class="second-color">from the blog<span class="special-color">.</span></h4>
                            <div class="footer-title-separator"></div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-12">
                                    <article>
                                        <a href="blog-right-sidebar.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/footer-blog1.jpg" alt="" class="footer-blog-image" /></a>
                                        <div class="footer-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
                                        <div class="footer-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                        <div class="clearfix"></div>					
                                    </article>
                                    <div class="footer-blog-separator hidden-xs"></div>
                                </div>
                                <div class="col-xs-6 col-sm-12">
                                    <article>
                                        <a href="blog-right-sidebar.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/footer-blog2.jpg" alt="" class="footer-blog-image" /></a>
                                        <div class="footer-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
                                        <div class="footer-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                        <div class="clearfix"></div>					
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <h4 class="second-color">newsletter<span class="special-color">.</span></h4>
                            <div class="footer-title-separator"></div>
                            <p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form class="form-inline footer-newsletter">
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="enter your email">
                                <button type="submit" class="btn"><i class="fa fa-lg fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>
            <footer class="small-cont">
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
            </footer>
        </div>

        <!-- Move to top button -->

        <div class="move-top">
            <div class="big-triangle-second-color"></div>
            <div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
        </div>	

        <?php if (Yii::$app->user->isGuest): ?>
            <!-- Login modal -->
            <div class="modal fade apartment-modal" id="login-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="modal-title">
                                <h1>Login<span class="special-color">.</span></h1>
                                <div class="short-title-separator"></div>
                            </div>
                            <?php
//                            $model = null;
                            if (!isset($model)) {
                                $model = new app\models\LoginForm();
                            }
                            $form = ActiveForm::begin([
                                        'id' => 'login-form',
                                        'action' => Url::toRoute("site/login"),
                                        'enableAjaxValidation' => true,
//                                    'options' => ['class' => 'form-horizontal'],
//                                    'fieldConfig' => [
//                                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
//                                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
//                                    ],
                            ]);
                            ?>
                            <?= $form->field($model, 'username')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Correo electronico'])->label(false); ?>
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'input-full main-input', 'placeholder' => 'Clave'])->label(false); ?>
    <!--                            <input name="login" type="email" class="input-full main-input" placeholder="Email" />
                            <input name="password" type="password" class="input-full main-input" placeholder="Your Password" />-->
                            <a onclick="document.getElementById('login-form').submit();" class="button-primary button-shadow button-full">
                                <span>Sing In</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-user"></i></div>
                            </a>
                            <?php ActiveForm::end(); ?>
                            <!--<a href="#" class="forgot-link pull-right">Forgot your password?</a>-->
                            <div class="clearfix"></div>
                            <!--<p class="login-or">OR</p>-->
                            <!--                        <a href="#" class="facebook-button">
                                                        <i class="fa fa-facebook"></i>
                                                        <span>Login with Facebook</span>
                                                    </a>
                                                    <a href="#" class="google-button margin-top-15">
                                                        <i class="fa fa-google-plus"></i>
                                                        <span>Login with Google</span>
                                                    </a>
                                                    <p class="modal-bottom">Don't have an account? <a href="#" class="register-link">REGISTER</a></p>-->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        <?php endif; ?>
        <!-- Register modal -->
        <div class="modal fade apartment-modal" id="register-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="modal-title">
                            <h1>Register<span class="special-color">.</span></h1>
                            <div class="short-title-separator"></div>
                        </div>
                        <input name="first-name" type="text" class="input-full main-input" placeholder="Frist name" />
                        <input name="last-name" type="text" class="input-full main-input" placeholder="Last name" />
                        <input name="email" type="email" class="input-full main-input" placeholder="Email" />
                        <input name="password" type="password" class="input-full main-input" placeholder="Password" />
                        <input name="repeat-password" type="password" class="input-full main-input" placeholder="Repeat Password" />
                        <a href="my-profile.html" class="button-primary button-shadow button-full">
                            <span>Sing up</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-user"></i></div>
                        </a>
                        <div class="clearfix"></div>
                        <p class="login-or">OR</p>
                        <a href="#" class="facebook-button">
                            <i class="fa fa-facebook"></i>
                            <span>Sing Up with Facebook</span>
                        </a>
                        <a href="#" class="google-button margin-top-15">
                            <i class="fa fa-google-plus"></i>
                            <span>Sing Up with Google</span>
                        </a>
                        <p class="modal-bottom">Already registered? <a href="#" class="login-link">SING IN</a></p>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Forgotten password modal -->
        <div class="modal fade apartment-modal" id="forgot-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="modal-title">
                            <h1>Forgot your password<span class="special-color">?</span></h1>
                            <div class="short-title-separator"></div>
                        </div>
                        <p class="negative-margin forgot-info">Instert your account email address.<br/>We will send you a link to reset your password.</p>
                        <input name="login" type="email" class="input-full main-input" placeholder="Your email" />
                        <a href="my-profile.html" class="button-primary button-shadow button-full">
                            <span>Reset password</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-user"></i></div>
                        </a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->      

        <!-- Bootstrap-->
        <!--<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/bootstrap/bootstrap.min.js"></script>-->

        <!-- plugins script -->
        <!--<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/js/plugins.js"></script>-->

        <!-- template scripts -->
        <!--<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/mail/validate.js"></script>-->
        <!--<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/js/apartment.js"></script>-->
        <?php $this->endBody() ?> 
        <script type="text/javascript">
//            $.noConflict();
        </script>
    </body>
</html>
<?php $this->endPage() ?>
