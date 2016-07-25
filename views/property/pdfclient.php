<?php

//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use yii\helpers\Url;

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
                'attribute' => 'user_id',
//                'label' => 'Agente encargado',
                'value' => $model->getAgent()->one()->names . " " . $model->getAgent()->one()->surnames,
            ],
            [
                'attribute' => 'user_id',
                'label' => 'Correo agente',
                'value' => $model->getAgent()->one()->email,
            ],
            [
                'attribute' => 'user_id',
                'label' => 'Teléfono agente',
                'value' => $model->getAgent()->one()->phone,
            ],
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
            [
                'attribute' => 'money',
                'value' => ($model->money === 'D') ? 'USD' : 'S/.',
            ],
            'area',
            [
                'attribute' => 'furnished',
                'format' => 'raw',
                'value' => ($model->furnished == 1) ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            'bedrooms',
            'bathrooms',
            'garages',
            'yearsold',
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
            [
                'attribute' => 'distrito_id',
                'value' => $model->getDistrito()->one()->distrito,
            ],
            'address',
            'references',
            [
                'attribute' => 'map',
                'format' => 'raw',
                'value' => "<img class='img-responsive' src='http://maps.googleapis.com/maps/api/staticmap?center=$model->latitude,$model->longitude&zoom=16&scale=1&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C$model->latitude,$model->longitude' alt='Google Map of $model->latitude,$model->longitude'>",
            ],
        ],
    ])
    ?>
    <h1>Imagenes de la propiedad</h1>
    <?= $model->getImagesCarousel('')?>
</div>
