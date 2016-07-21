<div class="featured-offer-col">
    <div class="featured-offer-front">
        <div class="featured-offer-photo">
            <img src="<?= Yii::$app->request->baseUrl . "/uploads/property/" . $model->getFirstImageFromProperty(); ?>" alt="" />
            <div class="type-container">
                <div class="estate-type"><?= $model->getType()->one()->type; ?></div>
                <div class="transaction-type"><?= $model->getState()->one()->state; ?></div>
            </div>
        </div>
        <div class="featured-offer-text">
            <h4 class="featured-offer-title"><?= $model->address; ?></h4>
            <p><?= $model->description; ?></p>
        </div>
        <div class="featured-offer-params">
            <div class="featured-area">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" /><?= isset($model->area)?$model->area:0; ?>m<sup>2</sup>
            </div>
            <div class="featured-rooms">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" /><?= isset($model->bedrooms)?$model->bedrooms:0; ?>
            </div>
            <div class="featured-baths">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" /><?= isset($model->bathrooms)?$model->bathrooms:0; ?>
            </div>                          
        </div>
        <div class="featured-price">
            <?= Yii::$app->formatter->asCurrency($model->price, ($model->money === 'D') ? 'USD' : 'S/.')?>
        </div>
    </div>
    <div class="featured-offer-back">
        <div id="featured-map-<?= $model->id ?>" class="featured-offer-map"></div>
        <div class="button">    
            <a target="_blank" href="<?= yii\helpers\Url::to(["viewproperty",'id'=>$model->id])?>" class="button-primary">
                <span>Leer mas</span>
                <div class="button-triangle"></div>
                <div class="button-triangle2"></div>
                <div class="button-icon"><i class="fa fa-search"></i></div>
            </a>
        </div>
    </div>
    <?php $this->registerJs("mapInit($model->latitude, $model->longitude, 'featured-map-$model->id', '".Yii::$app->request->baseUrl. app\assets\AppAsset::getIconPingProperty($model->getType()->one()->type). "', false);", yii\web\View::POS_LOAD, uniqid()); ?>
</div>