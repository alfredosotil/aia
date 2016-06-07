<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\DashboardAsset;
use yii\bootstrap\ActiveForm;

$this->title = 'AIA Dashboard';
DashboardAsset::register($this);
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

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <?= $content ?>
            </div>
            
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
        <?php $this->endBody() ?> 
    </body>
</html>
<?php $this->endPage() ?>
