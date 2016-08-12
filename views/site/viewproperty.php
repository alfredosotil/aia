<?php

use kartik\form\ActiveForm;

//use kartik\social\FacebookPlugin;

$agent = $model->getAgent()->one();
$images = $model->getImagesProperties()->orderBy('order')->all();
$extras = $model->getAccesspropertydetails()->all();
$cont = 1;
//echo yii\helpers\Url::base(true) ."<br>";
//echo yii\helpers\Url::canonical() ."<br>";
//echo yii\helpers\Url::current() ."<br>";
//echo yii\helpers\Url::home() ."<br>";
//echo yii\helpers\Url::base() ."<br>";
?>
<meta property="og:url"           content="<?= yii\helpers\Url::to(["viewproperty", 'id' => $model->id], 'http') ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?= $model->getType()->one()->type; ?> en <?= $model->getState()->one()->state ?>" />
<meta property="og:description"   content="<?= $model->description ?>" />
<meta property="og:image"         content="<?= yii\helpers\Url::base(true) . "/uploads/property/" . $model->getFirstImageFromProperty(); ?>" />
</head>
<div class="site-viewproperty">
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Gracias por contactarnos. Te responderemos lo mas pronto posibles.
        </div>

    <?php else: ?>
        <section class="section-dark no-padding">
            <!-- Slider main container -->
            <div id="swiper-gallery" class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($images as $i): ?>
                        <div class="swiper-slide">
                            <div class="slide-bg swiper-lazy" data-background="<?= Yii::$app->request->baseUrl . "/uploads/property/" . $i->name; ?>" data-sub-html=""></div>
                            <!-- Preloader image -->
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-9 col-lg-8 slide-desc-col animated fadeInUp gallery-slide-desc-<?= $cont ?>">
                                        <div class="gallery-slide-cont">
                                            <div class="gallery-slide-cont-inner">	
                                                <div class="gallery-slide-title pull-right">
                                                    <h5 class="subtitle-margin"><?= $model->getType()->one()->type; ?> en <?= $model->getState()->one()->state; ?></h5>
                                                    <h3><?= $model->address; ?><span class="special-color">.</span></h3>
                                                </div>
                                                <div class="gallery-slide-estate pull-right hidden-xs">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="gallery-slide-desc-price pull-right">
                                                <?=
                                                Yii::$app->formatter->asCurrency($model->price, ($model->money === 'D') ? 'USD' : 'S/.', [
                                                    \NumberFormatter::MIN_FRACTION_DIGITS => 0,
                                                    \NumberFormatter::MAX_FRACTION_DIGITS => 0,
                                                ])
                                                ?>
                                            </div>	
                                            <div class="clearfix"></div>
                                        </div>	
                                    </div>			
                                </div>
                            </div>
                        </div>
                        <?php $cont++; ?>
                    <?php endforeach; ?>
                </div>

                <div class="slide-buttons slide-buttons-center">
                    <a href="#" class="navigation-box navigation-box-next slide-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <div id="slide-more-cont"></div>
                    <a href="#" class="navigation-box navigation-box-prev slide-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                </div>

            </div>

        </section>
        <section class="thumbs-slider section-both-shadow">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1">
                        <a href="#" class="thumb-box thumb-prev pull-left"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                    </div>
                    <div class="col-xs-10">
                        <!-- Slider main container -->
                        <div id="swiper-thumbs" class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php foreach ($images as $i): ?>
                                    <div class="swiper-slide">
                                        <img class="slide-thumb" src="<?= Yii::$app->request->baseUrl . "/uploads/property/sm_" . $i->name; ?>" alt="">
                                    </div>
                                <?php endforeach; ?>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <a href="#" class="thumb-box thumb-next pull-right"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-light no-bottom-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <div class="details-image pull-left hidden-xs">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="details-title pull-left">
                                    <h5 class="subtitle-margin"><?= $model->getType()->one()->type; ?> en <?= $model->getState()->one()->state; ?></h5>
                                    <h3><?= $model->address; ?><span class="special-color">.</span></h3>
                                </div>
                                <div class="pull-right">
                                    <div class="fb-share-button" data-href="<?= yii\helpers\Url::to(["viewproperty", 'id' => $model->id]) ?>" data-layout="button" data-size="large" data-mobile-iframe="true">
                                        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a>
                                    </div>
                                    <!--?=
                                    FacebookPlugin::widget(['type' => FacebookPlugin::SHARE, 'settings' => [
                                            'href' => yii\helpers\Url::to(["viewproperty", 'id' => $model->id]),
                                            'layout' => 'button',
                                            'size' => 'large',
                                            'mobile_iframe' => true,
                                ]])
                                    ?!-->
                                </div>
                                <div class="clearfix"></div>	
                                <div class="title-separator-primary"></div>
                                <p class="details-desc"><?= $model->description; ?></p>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <div class="details-parameters-price"><?=
                                    Yii::$app->formatter->asCurrency($model->price, ($model->money === 'D') ? 'USD' : 'S/.', [
                                        \NumberFormatter::MIN_FRACTION_DIGITS => 0,
                                        \NumberFormatter::MAX_FRACTION_DIGITS => 0,
                                    ])
                                    ?></div>
                                <div class="details-parameters">
                                    <div class="details-parameters-cont">
                                        <div class="details-parameters-name">Area</div>
                                        <div class="details-parameters-val"><?= isset($model->area) ? $model->area : 0; ?>m<sup>2</sup></div>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="details-parameters-cont">
                                        <div class="details-parameters-name">Cuartos</div>
                                        <div class="details-parameters-val"><?= isset($model->bedrooms) ? $model->bedrooms : 0; ?></div>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="details-parameters-cont">
                                        <div class="details-parameters-name">Ba&ntilde;os</div>
                                        <div class="details-parameters-val"><?= isset($model->bathrooms) ? $model->bathrooms : 0; ?></div>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="details-parameters-cont">
                                        <div class="details-parameters-name">Garajes</div>
                                        <div class="details-parameters-val"><?= isset($model->garages) ? $model->garages : 0; ?></div>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="details-parameters-cont">
                                        <div class="details-parameters-name">Antig&uuml;edad</div>
                                        <div class="details-parameters-val"><?= isset($model->yearsold) ? $model->yearsold : 0; ?></div>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="details-parameters-cont">
                                        <div class="details-parameters-name">Amoblado</div>
                                        <div class="details-parameters-val"><?= ($model->furnished == 1) ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>'; ?></div>
                                        <div class="clearfix"></div>	
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-45">
                            <div class="col-xs-6 col-sm-4">
                                <ul class="details-ticks">
                                    <?php foreach ($extras as $e): ?>
                                        <?php
                                        $pd = \app\models\PropertyDetail::findOne($e->property_detail_id);
                                        ?>
                                        <li><i class="jfont">&#xe815;</i><?= $pd->name ?></li>
                                    <?php endforeach; ?>                              
                                </ul>
                            </div>
                        </div>
                        <div class="row margin-top-45">
                            <div class="col-xs-12 apartment-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab">
                                            <span>Mapa</span>
                                            <div class="button-triangle2"></div>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-street-view" aria-controls="tab-street-view" role="tab" data-toggle="tab">
                                            <span>Vista de la Calle</span>
                                            <div class="button-triangle2"></div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab-map">
                                        <div id="estate-map" class="details-map"></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-street-view">
                                        <div id="estate-street-view" class="details-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-60">
                            <div class="col-xs-12">
                                <h3 class="title-negative-margin">Contacta al Agente<span class="special-color">.</span></h3>
                                <div class="title-separator-primary"></div>
                            </div>
                        </div>
                        <div class="row margin-top-60">
                            <div class="col-xs-8 col-xs-offset-2 col-sm-3 col-sm-offset-0">
                                <h5 class="subtitle-margin">Agente</h5>
                                <h3 class="title-negative-margin"><?= $agent->names . " " . $agent->surnames ?><span class="special-color">.</span></h3>
                                <a href="#" class="agent-photo">
                                    <img src="<?= isset($agent->avatar) ? Yii::$app->request->baseUrl . "/uploads/user/" . $agent->avatar : Yii::$app->request->baseUrl . "/images/avatar-generic.jpg"; ?>" alt="" class="img-responsive" />
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <div class="agent-social-bar">
                                    <div class="pull-left">
                                        <span class="agent-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="agent-bar-text"><?= isset($agent->phone) ? $agent->phone : "No tiene"; ?></span>
                                    </div>
                                    <div class="pull-left">
                                        <span class="agent-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="agent-bar-text"><?= isset($agent->email) ? $agent->email : "No tiene"; ?></span>
                                    </div>
                                    <div class="pull-right">
                                        <!--                                <div class="pull-right">
                                                                            <a class="agent-icon-circle" href="#">
                                                                                <i class="fa fa-facebook"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="pull-right">
                                                                            <a class="agent-icon-circle icon-margin" href="#">
                                                                                <i class="fa fa-twitter"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="pull-right">
                                                                            <a class="agent-icon-circle icon-margin" href="#">
                                                                                <i class="fa fa-google-plus"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="pull-right">
                                                                            <a class="agent-icon-circle icon-margin" href="#">
                                                                                <i class="fa fa-skype"></i>
                                                                            </a>
                                                                        </div>-->
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
                                <?= $form->field($modelcf, 'name')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Tu nombre'])->label(false) ?>

                                <?= $form->field($modelcf, 'phone')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Tu telefono'])->label(false) ?>

                                <?= $form->field($modelcf, 'email')->textInput(['class' => 'input-full contact-textarea main-input', 'placeholder' => 'Tu correo electronico'])->label(false) ?>

                                <?= $form->field($modelcf, 'body')->textArea(['rows' => 6, 'class' => 'input-full contact-textarea main-input', 'placeholder' => 'Cual es tu consulta?'])->label(false) ?>
                                <!--<div class="form-submit-cont">-->
                                <a href="javascript:document.getElementById('contactus-form').submit();" class="button-primary" id="form-submit">
                                    <span>Enviar</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                </a>
                                <div class="clearfix"></div>
                                <!--</div>-->
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>                        
                        <div class="margin-top-45"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->registerJs("mapInit($model->latitude, $model->longitude, 'estate-map', '" . Yii::$app->request->baseUrl . app\assets\AppAsset::getIconPingProperty($model->getType()->one()->type) . "', true);
                         streetViewInit($model->latitude, $model->longitude, 'estate-street-view');
", yii\web\View::POS_LOAD, uniqid()); ?>
    <?php endif; ?>
</div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1682765562047834";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>