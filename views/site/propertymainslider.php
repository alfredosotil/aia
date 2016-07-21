<?php
$classContainer = array();
$classContainer[1] = 'col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-4 col-lg-offset-6 slide-desc-col animated fadeInUp slide-desc-';
$classContainer[2] = 'col-xs-12 col-sm-10 col-md-8 col-lg-6 slide-desc-col animated fadeInUp slide-desc-';
$classContainer[3] = 'col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 slide-desc-col animated fadeInUp slide-desc-';
$classDescription = array();
$classDescription[1] = 'slide-desc pull-right';
$classDescription[2] = 'slide-desc pull-left';
$classDescription[3] = 'slide-desc center-block';
$classButtons = array();
$classButtons[1] = 'slide-buttons slide-buttons-right';
$classButtons[2] = 'slide-buttons slide-buttons-left';
$classButtons[3] = 'slide-buttons slide-buttons-center';
?>
<div class="swiper-slide">
    <div class="slide-bg swiper-lazy" data-background="<?= Yii::$app->request->baseUrl . "/uploads/property/" . $model->getFirstImageFromProperty(); ?>"></div>
    <!-- Preloader image -->
    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
    <div class="container">
        <div class="row">
            <div class="<?= $classContainer[$position] . $cont ?>">
                <div class="<?= $classDescription[$position] ?>">
                    <div class="slide-desc-text">

                        <div class="estate-type"><?= $model->getType()->one()->type; ?></div>
                        <div class="transaction-type"><?= $model->getState()->one()->state; ?></div>
                        <h4><?= $model->address; ?></h4>
                        <div class="clearfix"></div>

                        <p><?= $model->description; ?></p>
                    </div>
                    <div class="slide-desc-params">	
                        <div class="slide-desc-area">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" /><?= isset($model->area) ? $model->area : 0; ?>m<sup>2</sup>
                        </div>
                        <div class="slide-desc-rooms">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" /><?= isset($model->bedrooms) ? $model->bedrooms : 0; ?>
                        </div>
                        <div class="slide-desc-baths">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" /><?= isset($model->bathrooms) ? $model->bathrooms : 0; ?>
                        </div>	
                        <div class="slide-desc-parking">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/parking-icon.png" alt="" /><?= isset($model->garages) ? $model->garages : 0; ?>
                        </div>	
                    </div>
                    <div class="slide-desc-price">
                        <?= Yii::$app->formatter->asCurrency($model->price, ($model->money === 'D') ? 'USD' : 'S/.')?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="<?= $classButtons[$position] ?>">
                    <a href="#" class="navigation-box navigation-box-next slide-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <a target="_blank" href="<?= yii\helpers\Url::to(["viewproperty",'id'=>$model->id])?>" class="navigation-box navigation-box-more slide-more"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont fa-lg">&#xe813;</i></div></a>
                    <a href="#" class="navigation-box navigation-box-prev slide-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                </div>
            </div>
        </div>
    </div>
</div>