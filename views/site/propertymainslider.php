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
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" /><?= $model->area; ?>m<sup>2</sup>
            </div>
            <div class="featured-rooms">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" /><?= $model->bedrooms; ?>
            </div>
            <div class="featured-baths">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" /><?= $model->bathrooms; ?>
            </div>                          
        </div>
        <div class="featured-price">
            <?= ($model->price === 'D') ? '$' : 'S/.'; ?> <?= $model->price; ?>
        </div>
    </div>
    <div class="featured-offer-back">
        <div id="featured-map-<?= $model->id ?>" class="featured-offer-map"></div>
        <div class="button">    
            <a href="estate-details-right-sidebar.html" class="button-primary">
                <span>Leer mas</span>
                <div class="button-triangle"></div>
                <div class="button-triangle2"></div>
                <div class="button-icon"><i class="fa fa-search"></i></div>
            </a>
        </div>
    </div>
    <?php $this->registerJs("mapInit($model->latitude, $model->longitude, 'featured-map-$model->id', '".Yii::$app->request->baseUrl. "/images/pin-house.png', false);", yii\web\View::POS_END, uniqid()); ?>
</div>