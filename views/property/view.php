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
                'attribute' => 'type',
                'label' => 'Tipo de inmueble',
                'value' => $model->getType()->one()->type,
            ],
            [
                'attribute' => 'state',
                'label' => 'Estado de inmueble',
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
            [
                'attribute' => 'furnished',
                'format' => 'raw',
                'value' => ($model->furnished == 1) ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            'bedrooms',
            'bathrooms',
            'garages',
            'yearsold',
            'priority',
            'description',
            [
                'attribute' => 'extras',
                'format' => 'raw',
                'value' => $model->getPropertyDetail(),
            ],
            [
                'attribute' => 'active',
                'format' => 'raw',
                'value' => ($model->active == 1) ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
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
    <?php $this->registerJs("getMapProperty();", yii\web\View::POS_END, uniqid());?>
</div>
