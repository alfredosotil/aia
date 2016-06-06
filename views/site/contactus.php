<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
?>

<div class="site-contact">
    <section class="short-image no-padding contact-short-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 short-image-title">
                    <h5 class="subtitle-margin second-color">get in touch</h5>
                    <h1 class="second-color">Contact Us</h1>
                    <div class="short-title-separator"></div>
                </div>
            </div>
        </div>

    </section>

    <section class="section-light section-both-shadow top-padding-45">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 margin-top-45">
                    <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/contact-image.jpg" alt="" class="pull-left margin-top-45" />
                    <address class="contact-info pull-left">
                        <span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
                        <span><i class="fa fa-envelope"></i><a href="#">email@domain.tld</a></span>
                        <span><i class="fa fa-phone"></i>01-23456789</span>
                        <span><i class="fa fa-globe"></i><a href="#">http://somedmain.tld</a></span>
                        <span><i class="fa fa-clock-o"></i>mon-fri: 8:00 - 18:00</span>
                        <span class="span-last">sat: 10:00 - 16:00</span>
                    </address>
                </div>
                <div class="col-xs-12 col-md-6 margin-top-45">
                    <form name="contact-from" id="contact-form" action="#" method="get">
                        <div id="form-result"></div>
                        <input name="name" id="name" type="text" class="input-short main-input required,all" placeholder="Your name" />
                        <input name="phone" id="phone" type="text" class="input-short pull-right main-input required,all" placeholder="Your phone" />
                        <input name="mail" id="mail" type="email" class="input-full main-input required,email" placeholder="Your email" />
                        <textarea name="message" id="message" class="input-full contact-textarea main-input required,email" placeholder="Your question"></textarea>
                        <div class="form-submit-cont">
                            <a href="#" class="button-primary pull-right" id="form-submit">
                                <span>send</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>

    <section class="contact-map2" id="contact-map2">
    </section>
</div>
<!-- Google Maps -->


<!-- google maps initialization -->	
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        mapInit(41.6926, -87.6021, "contact-map2", "<?= Yii::$app->request->baseUrl; ?>/images/pin-contact.png", true);
    }
</script>