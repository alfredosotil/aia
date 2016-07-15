<?php
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
use kartik\form\ActiveForm;
?>
<div class="site-aboutus">
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Gracias por contactarnos. Te responderemos lo mas pronto posibles.
        </div>

    <?php else: ?>        
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
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent.jpg" alt="" class="img-responsive" />
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
                                        <a href="javascript:document.getElementById('contactus-form').submit();" class="button-primary" id="form-submit">
                                            <span>Enviar</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                        </a>
                                        <div class="clearfix"></div>
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                mapInit(-12.1156075, -77.0313685, "contact-map1", "<?= Yii::$app->request->baseUrl; ?>/images/pin-contact.png", true, true);
            }
        </script>
    <?php endif; ?>

</div>


