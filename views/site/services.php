<?php
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
\yii\bootstrap\BootstrapPluginAsset::register($this);
?>
<div class="site-services">

    <section class="neighbourhood">		
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                    <h5 class="subtitle-margin">aia</h5>
                    <h1 class="">Servicios de Asesor&iacute;a<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 navigation-box2-cont">
                    <a href="#" class="navigation-box navigation-box-next" id="neighbourhood-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <a href="#" class="navigation-box navigation-box-prev" id="neighbourhood-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>								
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="neighbourhood-container">
            <div class="owl-carousel" id="neighbourhood-owl">
                <div class="neighbourhood-col">
                    <div class="neighbourhood-item">
                        <div class="neighbourhood-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/ASESORAMIENTOINMOBILIARIO.jpg" alt="" />
                        </div>
                        <div class="neighbourhood-text">
                            <h4 class="neighbourhood-title">INMOBILIARIA</h4>
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
                <div class="neighbourhood-col">
                    <div class="neighbourhood-item">
                        <div class="neighbourhood-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/ASESORAMIENTOCOMERCIAL.jpg" alt="" />
                        </div>
                        <div class="neighbourhood-text">
                            <h4 class="neighbourhood-title">COMERCIAL</h4>
                            <p><?php echo htmlspecialchars("Promocionamos su inmueble en todos los portales inmobiliarios, así como con la Red de agentes registrados a nivel nacional House On Line. Ofrecemos la difusión más completa para la venta o alquiler de su inmueble, con la finalidad de cerrar la operación en el menor tiempo posible.") ?></p>
                        </div>
                    </div>
                </div>
                <div class="neighbourhood-col">
                    <div class="neighbourhood-item">
                        <div class="neighbourhood-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/ASESORAMIENTOLEGAL.jpg" alt="" />
                        </div>
                        <div class="neighbourhood-text">
                            <h4 class="neighbourhood-title">LEGAL</h4>
                            <p><?php echo htmlspecialchars("Contamos en nuestro equipo con abogados especializados en inmuebles, para brindar asesoría en saneamiento inmobiliario, firmar minutas de compra-venta, así como también vigilar y dar conformidad al proceso  del cierre de las operaciones para que estas sean confiables y seguras.") ?></p>
                        </div>
                    </div>
                </div>
                <div class="neighbourhood-col">
                    <div class="neighbourhood-item">
                        <div class="neighbourhood-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/FINANCIAMIENTOHIPOTECARIO.jpg" alt="" />
                        </div>
                        <div class="neighbourhood-text">
                            <h4 class="neighbourhood-title">FINANCIAMIENTO HIPOTECARIO</h4>
                            <p><?php echo htmlspecialchars("GRACIAS A NUESTRO CONOCIMIENTO EN TODO EL PROCESO QUE SE REALIZA PARA UN FINANCIAMIENTO HIPOTECARIO, LE BRINDAMOS ASESORÍA CON INFORMACIÓN ACTUAL PARA LA SOLICITUD DE SU CRÉDITO HIPOTECARIO, GUIANDOLO PASO A PASO, CON LA FINALIDAD QUE LOGRE CUMPLIR CON LOS REQUISITOS REQUERIDOS POR LAS ENTIDADES BANCARIAS Y PUEDA ASI CALIFICAR Y OBTENER SU CRÉDITO.") ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
