<?php
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
\yii\bootstrap\BootstrapPluginAsset::register($this);
?>
<div class="site-services">
    <section class="rooms parallax">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">AIA</h5>
                    <h1 class="">servicios<span class="special-color">.</span></h1>
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
                                    <span>INMOBILIARIA</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont"></i></div>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/ASESORAMIENTOINMOBILIARIO.jpg" alt="" class="p-image img-responsive">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <div class="row margin-top-30">
                                                <div class="col-xs-12">
                                                    <ul class="ticks-ul">
                                                        <li><i class="jfont"></i>Evaluaci&oacute;n y Valorizaci&oacute;n Comercial</li>
                                                        <li><i class="jfont"></i>Selecci&oacute;n de clientes potenciales</li>
                                                        <li><i class="jfont"></i>Visitas personalizadas</li>
                                                        <li><i class="jfont"></i>Informe peri&oacute;dico de gesti&oacute;n de venta o alquiler</li>
                                                        <li><i class="jfont"></i>Negociaci&oacute;n y cierre de operaci&oacute;n</li>
                                                        <li><i class="jfont"></i>Asesoramiento de inicio a fin hasta firmar Escrituras Públicas o Contrato de  Arrendamiento</li>
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
                                    <span>COMERCIAL</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont"></i></div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/ASESORAMIENTOCOMERCIAL.jpg" alt="" class="p-image img-responsive">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin"><?php echo htmlspecialchars("Promocionamos su inmueble en todos los portales inmobiliarios, así como con la Red de agentes registrados a nivel nacional House On Line. Ofrecemos la difusión más completa para la venta o alquiler de su inmueble, con la finalidad de cerrar la operación en el menor tiempo posible.") ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>LEGAL</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont"></i></div>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/ASESORAMIENTOLEGAL.jpg" alt="" class="p-image img-responsive">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin"><?php echo htmlspecialchars("Contamos en nuestro equipo con abogados especializados en inmuebles, para brindar asesoría en saneamiento inmobiliario, firmar minutas de compra-venta, así como también vigilar y dar conformidad al proceso  del cierre de las operaciones para que estas sean confiables y seguras.") ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>FINANCIAMIENTO HIPOTECARIO</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="jfont"></i></div>
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/FINANCIAMIENTOHIPOTECARIO.jpg" alt="" class="p-image img-responsive">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">	
                                            <p class="negative-margin"><?php echo htmlspecialchars("GRACIAS A NUESTRO CONOCIMIENTO EN TODO EL PROCESO QUE SE REALIZA PARA UN FINANCIAMIENTO HIPOTECARIO, LE BRINDAMOS ASESORÍA CON INFORMACIÓN ACTUAL PARA LA SOLICITUD DEL SU CRÉDITO HIPOTECARIO, GUIANDOLO PASO A PASO, CON LA FINALIDAD QUE LOGRE CUMPLIR CON LOS REQUISITOS REQUERIDOS POR LAS ENTIDADES BANCARIAS Y PUEDA ASI CALIFICAR Y OBTENER SU CRÉDITO.") ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </section>
</div>
