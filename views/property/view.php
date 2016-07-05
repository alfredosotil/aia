<?php

//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use kartik\widgets\StarRating;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
?>
<div class="property-view">

    <?=
    DetailView::widget([
        'model' => $model,
        'condensed' => true,
        'hover' => true,
        'attributes' => [
            'id',
            [
                'attribute' => 'type_id',
//                'format' => 'raw',
                'value' => $model->getType()->one()->type,
            ],
            [
                'attribute' => 'state_id',
//                'format' => 'raw',
                'value' => $model->getState()->one()->state,
            ],
            'price',
            'money',
            [
                'attribute' => 'commission',
//                'format' => 'raw',
                'value' => $model->commission . "%",
            ],
            [
                'attribute' => 'area',
//                'format' => 'raw',
                'value' => $model->area . "m2",
            ],
            'bedrooms',
            'bathrooms',
            'priority', 
            [
                'attribute' => 'active',
                'format' => 'raw',
                'value' => ($model->active == 1)?'<span class="label label-success">Si</span>':'<span class="label label-danger">No</span>',
            ],
            'datecreation',
            'datestart',
            'datelastupdate',
            'owner',
            'phoneowner',
            'emailowner:email',
            [
                'attribute' => 'latitude',
                'format' => 'raw',
                'value' => "<div id='property-map-view-latitude'>$model->latitude</div>",
            ],
            [
                'attribute' => 'longitude',
                'format' => 'raw',
                'value' => "<div id='property-map-view-longitude'>$model->longitude</div>",
            ],
            'address',
            'references',
            [
                'attribute' => 'map',
                'format' => 'raw',
                'value' => '<a id="link-photo-map" target="_blank"><div id="property-map-view" class="loader-map"></div></a>',
            ],
            [
                'attribute' => 'imageFiles',
                'format' => 'raw',
                'value' => $model->getImagesCarousel(),
            ],
        ],
    ])
    ?>

</div>
