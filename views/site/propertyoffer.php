<div class="orderCommand">
    <div class="list-offer" data-price="<?= $model->price ?>" data-area="<?= isset($model->area) ? $model->area : 0; ?>">
        <div class="list-offer-left">
            <div class="list-offer-front">
                <div class="list-offer-photo">
                    <img src="<?= Yii::$app->request->baseUrl . "/uploads/property/sqr_" . $model->getFirstImageFromProperty(); ?>" alt="" />
                    <div class="type-container">
                        <div class="estate-type"><?= $model->getType()->one()->type; ?></div>
                        <div class="transaction-type"><?= $model->getState()->one()->state; ?></div>
                    </div>
                </div>
                <div class="list-offer-params">
                    <div class="list-area">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" /><?= isset($model->area) ? $model->area : 0; ?>m<sup>2</sup>
                    </div>
                    <div class="list-rooms">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" /><?= isset($model->bedrooms) ? $model->bedrooms : 0; ?>
                    </div>
                    <div class="list-baths">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" /><?= isset($model->bathrooms) ? $model->bathrooms : 0; ?>
                    </div>							
                </div>	
            </div>
            <div class="list-offer-back">
                <div id="list-map<?= $model->id ?>" class="list-offer-map"></div>
            </div>
        </div>
        <a class="list-offer-right" target="_blank" href="<?= yii\helpers\Url::to(["viewproperty", 'id' => $model->id]) ?>">
            <div class="list-offer-text">
                <i class="fa fa-map-marker list-offer-localization hidden-xs"></i>
                <div class="list-offer-h4"><h4 class="list-offer-title"><?= $model->address; ?></h4></div>
                <div class="clearfix"></div>
                <?= $model->description; ?>
                <div class="clearfix"></div>
            </div>
            <div class="price-list-cont">
                <div class="list-price">
                    <?=
                    Yii::$app->formatter->asCurrency($model->price, ($model->money === 'D') ? 'USD' : 'S/.', [
                        \NumberFormatter::MIN_FRACTION_DIGITS => 0,
                        \NumberFormatter::MAX_FRACTION_DIGITS => 0,
                    ])
                    ?>
                </div>	
            </div>
        </a>
        <div class="clearfix"></div>
    </div>
    <?php
    if (!$ajax)
        $this->registerJs("mapInit($model->latitude, $model->longitude, 'list-map$model->id', '" . Yii::$app->request->baseUrl . \app\assets\AppAsset::getIconPingProperty($model->getType()->one()->type) . "', false);", yii\web\View::POS_LOAD, uniqid());
    ?>
    <div class="clearfix"></div>
</div>
