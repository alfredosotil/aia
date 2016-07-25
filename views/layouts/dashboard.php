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
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <!--<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/bootstrap/bootstrap.min.css">-->    
        <!-- Font awesome styles -->    
        <!--<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/apartment-font/css/font-awesome.min.css">-->  
        <!-- Custom styles -->
        <!--<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/plugins.css">-->
        <!--<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/apartment-layout.css">-->
        <!--<link id="skin" rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/apartment-colors-blue.css">-->
        <!-- Custom styles -->
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
        <script src="https://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;libraries=places"></script>
        <?php $this->head() ?>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->   
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
                    <a class="navbar-brand" href="<?= Url::toRoute("dashboard/index") ?>">AIA Dashboard</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">              
                    <!-- /.dropdown -->
                    <li class="dropdown pull-right">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            usuario(<?= Yii::$app->user->identity->username ?>)<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= Url::toRoute("site/index", 'http') ?>"><i class="fa fa-home fa-fw"></i> Inicio AIA</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= Url::toRoute("site/logout", 'http') ?>" data-method="post"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
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
                            <?php echo app\assets\AppAsset::menuDashboard(); ?>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <?= $content ?>               
            </div>
            <footer class="small-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 pull-right">
                            &copy; Copyright <?php echo date("Y"); ?> <a href="#" target="_blank">SwInn</a>. All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /#page-wrapper -->
        </div>
        <?php $this->endBody() ?> 
    </body>
</html>
<?php $this->endPage() ?>
