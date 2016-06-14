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
                    <a class="navbar-brand" href="<?= Url::toRoute("dashboard/index") ?>">AIA Dashboard</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!--                    <li class="dropdown">
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
                                             /.dropdown-messages 
                                        </li>-->
                    <!-- /.dropdown -->
                    <!--                    <li class="dropdown">
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
                                             /.dropdown-tasks 
                                        </li>-->
                    <!-- /.dropdown -->
                    <!--                    <li class="dropdown">
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
                                             /.dropdown-alerts 
                                        </li>-->
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= Url::toRoute("site/index") ?>"><i class="fa fa-home fa-fw"></i> Inicio AIA</a>
                            </li>
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= Url::toRoute("site/logout") ?>" data-method="post"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <!--                            <li class="sidebar-search">
                                                            <div class="input-group custom-search-form">
                                                                <input type="text" class="form-control" placeholder="Search...">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </span>
                                                            </div>                                 
                                                        </li>-->
                            <?php echo app\assets\AppAsset::menuDashboard(); ?>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <?= $content ?>
                <footer class="small-cont">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 pull-right">
                                &copy; Copyright <?php echo date("Y"); ?> <a href="#" target="_blank">SwInn</a>. All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <div class="loader-bg"></div>
        <?php $this->endBody() ?> 
<!--<script src="<?= Yii::$app->request->baseUrl; ?>/bootstrap/bootstrap.min.js" type="text/javascript"></script>-->
    </body>
</html>
<?php $this->endPage() ?>
