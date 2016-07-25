<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use kartik\form\ActiveForm;
?>

<div class="site-contact">
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Gracias por contactarnos. Te responderemos lo mas pronto posibles.
        </div>

    <?php else: ?>
        <section class="short-image no-padding contact-short-title">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 short-image-title">
                        <h5 class="subtitle-margin second-color">mantente en contacto</h5>
                        <h1 class="second-color">Contactanos</h1>
                        <div class="short-title-separator"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-light section-both-shadow top-padding-45">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3 margin-top-45">
                        <address class="contact-info pull-left">
                            <span><i class="fa fa-map-marker"></i>Calle Coronel Inclan 425 int. 104.</span>
                            <span><i class="fa fa-envelope"></i><a href="mailto:informes@aia.com.pe?Subject=Informes%20AIA">informes@aia.com.pe</a></span>
                            <span><i class="fa fa-phone"></i>+51(01)4785767</span>
                            <span><i class="fa fa-clock-o"></i>Lunes - Viernes: 8:00 - 18:00</span>
                            <span class="span-last">S&aacute;bados: 10:00 - 16:00</span>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-9 margin-top-45">
                        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'contactus-form',
//                                'type' => ActiveForm::TYPE_HORIZONTAL,
//                                'options' => ['enctype' => 'multipart/form-data']
                        ]);
                        ?>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'input-full main-input', 'placeholder' => 'Tu nombre'])->label(false) ?>

                        <?= $form->field($model, 'phone')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Tu telefono'])->label(false) ?>

                        <?= $form->field($model, 'email')->textInput(['class' => 'input-full contact-textarea main-input', 'placeholder' => 'Tu correo electronico'])->label(false) ?>

                        <?= $form->field($model, 'body')->textArea(['rows' => 6, 'class' => 'input-full contact-textarea main-input', 'placeholder' => '¿Cual es tu consulta?'])->label(false) ?>
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
        </section>

        <section class="contact-map2" id="contact-map2">
        </section>
    <?php endif; ?>
</div>

<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        mapInit(-12.1156075, -77.0313685, "contact-map2", "<?= Yii::$app->request->baseUrl; ?>/images/pin-contact.png", true);
    }
</script>