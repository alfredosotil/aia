<div class="grid-offer">
    <div class="grid-offer-front">

        <div class="grid-offer-photo">
            <img src="<?= Yii::$app->request->baseUrl . "/uploads/property/" . $model->getFirstImageFromProperty(); ?>" alt="" />
            <div class="type-container">
                <div class="estate-type"><?= $model->getType()->one()->type; ?></div>
                <div class="transaction-type"><?= $model->getState()->one()->state; ?></div>
            </div>
        </div>
        <div class="grid-offer-text">
            <i class="fa fa-map-marker grid-offer-localization"></i>
            <div class="grid-offer-h4"><h4 class="grid-offer-title"><?= $model->address; ?></h4></div>
            <div class="clearfix"></div>
            <p><?= $model->description; ?></p>
            <div class="clearfix"></div>
        </div>
        <div class="price-grid-cont">
            <div class="grid-price-label pull-left">Precio:</div>
            <div class="grid-price pull-right">
                <?= Yii::$app->formatter->asCurrency($model->price, ($model->money === 'D') ? 'USD' : 'S/.')?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="grid-offer-params">
            <div class="grid-area">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" /><?= isset($model->area)?$model->area:0; ?>m<sup>2</sup>
            </div>
            <div class="grid-rooms">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" /><?= isset($model->bedrooms)?$model->bedrooms:0; ?>
            </div>
            <div class="grid-baths">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" /><?= isset($model->bathrooms)?$model->bathrooms:0; ?>
            </div>							
        </div>	

    </div>
    <div class="grid-offer-back">
        <div id="grid-map<?= $model->id ?>" class="grid-offer-map"></div>
        <div class="button">	
            <a target="_blank" href="<?= yii\helpers\Url::to(["viewproperty",'id'=>$model->id])?>" class="button-primary">
                <span>Leer mas</span>
                <div class="button-triangle"></div>
                <div class="button-triangle2"></div>
                <div class="button-icon"><i class="fa fa-search"></i></div>
            </a>
        </div>
    </div>
    <?php $this->registerJs("mapInit($model->latitude, $model->longitude, 'grid-map$model->id', '".Yii::$app->request->baseUrl. app\assets\AppAsset::getIconPingProperty($model->getType()->one()->type). "', false);", yii\web\View::POS_LOAD, uniqid()); ?>
</div>