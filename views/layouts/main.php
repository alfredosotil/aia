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
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon">        
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places"></script>
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
            <!-- Page header -->	
            <header>                
                <div class="top-bar-wrapper">
                    <div class="container top-bar">
                        <div class="row">
                            <div class="col-xs-5 col-sm-8">
                                <div class="top-mail pull-left hidden-xs">
                                    <span class="top-icon-circle">
                                        <i class="fa fa-envelope fa-sm"></i>
                                    </span>
                                    <a class="top-bar-text" href="mailto:informes@aia.com.pe?Subject=Informes%20AIA">informes@aia.com.pe</a>
                                </div>
                                <div class="top-phone pull-left hidden-xxs">
                                    <span class="top-icon-circle">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span class="top-bar-text">+51(01)4785767</span>
                                </div>
                                <div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
                                    <span class="top-icon-circle pull-left">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span class="top-bar-text">Calle Coronel Inclan 425 int. 104.</span>
                                </div>
                            </div>
                            <div class="col-xs-7 col-sm-4">
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <div class=" pull-right" style="margin-top: 8px; margin-left: 8px;" data-togle="tooltip" data-placement="bottom" title="Usuario">
                                        <a class=""  href="#">
                                            (<?= Yii::$app->user->identity->username ?>)<i class="fa fa-user fa-fw"></i>
                                        </a>
                                    </div>
                                    <div class="top-social-last pull-right" data-toggle="tooltip" data-placement="bottom" title="Admin Site">
                                        <a class="top-icon-circle" href="<?= Url::toRoute("dashboard/index", 'https') ?>">
                                            <i class="fa fa-tachometer"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>                                  
                                <?php if (Yii::$app->user->isGuest): ?>
                                    <div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Inicia Sesion">

                                        <a class="top-icon-circle" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-lock"></i>
                                        </a>
                                    </div>   
                                <?php else: ?>  
                                    <div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Salir">

                                        <a class="top-icon-circle" href="<?= Url::toRoute("site/logout") ?>" data-method="post">
                                            <i class="fa fa-sign-out"></i>
                                        </a>
                                    </div>                    
                                <?php endif; ?>

                                <div class="top-social pull-right" data-toggle="tooltip" data-placement="bottom" title="Youtube">
                                    <a class="top-icon-circle" href="https://www.youtube.com/channel/UC94TDn5VJgz3jDUwpNQ6JVg">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                                    <a class="top-icon-circle" target="_blank" href="https://www.facebook.com/aia.agenciadeasesoriainmobiliaria">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right" data-toggle="tooltip" data-placement="bottom" title="Skype">
                                    <a class="top-icon-circle" href="skype:informesaia2?call">
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
                                <img class="responsive-img" src="<?= Yii::$app->request->baseUrl; ?>/images/logo-dark.png" alt="AIA Inmobiliaria" />
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="button">
                                    <a href="<?= Url::toRoute("site/index") ?>" class="" role="button" aria-haspopup="true" >Inicio</a>
                                </li>
                                <li class="button">
                                    <a href="<?= Url::toRoute("site/aboutus") ?>" class="" role="button" aria-haspopup="true" aria-expanded="true">¿Qui&Eacute;nes Somos?</a>
                                </li>
                                <li class="button">
                                    <a href="<?= Url::toRoute("site/services") ?>" class="" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                </li>
                                <li class="button">
                                    <a href="<?= Url::toRoute("site/contactus") ?>" class="" role="button" aria-haspopup="true" aria-expanded="false">Cont&Aacute;ctanos</a>
                                </li>
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
                            <h4 class="second-color">contactanos<span class="special-color">.</span></h4>
                            <div class="footer-title-separator"></div>
                            <p class="footer-p">Te brindamos la informaci&oacute;n necesaria para que nos puedas contactar.</p>
                            <address>
                                <span><i class="fa fa-map-marker"></i>Calle Coronel Inclan 425 int. 104.</span>
                                <div class="footer-separator"></div>
                                <span><i class="fa fa-envelope fa-sm"></i><a href="mailto:informes@aia.com.pe?Subject=Informes%20AIA">informes@aia.com.pe</a></span>
                                <div class="footer-separator"></div>
                                <span><i class="fa fa-phone"></i>+51(01)4785767</span>
                            </address>
                            <div class="clear"></div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-lg-3">
                            <h4 class="second-color">webmail<span class="special-color">.</span></h4>
                            <div class="footer-title-separator"></div>
                            <ul class="footer-ul">
                                <li><span class="custom-ul-bullet"></span><a target="_blank" href="http://www.aia.com.pe/webmail">AIA Webmail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <footer class="small-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 small-cont">
                        </div>
                        <div class="col-xs-12 col-md-6 footer-copyrights">
                            &copy; Copyright <?php echo date("Y"); ?> <a href="#" target="_blank">SwInn</a>. Todos los derechos Reservados.
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
                                <h1>Iniciar Sesion<span class="special-color">.</span></h1>
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
                            <?= $form->field($model, 'username')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Usuario'])->label(false); ?>
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'input-full main-input', 'placeholder' => 'Clave'])->label(false); ?>
    <!--                            <input name="login" type="email" class="input-full main-input" placeholder="Email" />
                            <input name="password" type="password" class="input-full main-input" placeholder="Your Password" />-->
                            <a onclick="document.getElementById('login-form').submit();" class="button-primary button-shadow button-full">
                                <span>acceder</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-user"></i></div>
                            </a>
                            <?php ActiveForm::end(); ?>
                            <div class="clearfix"></div>
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
