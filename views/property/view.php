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
            'type_id',
            'state_id',
            'price',
            'money',
            'commission',
            'area',
            'bedrooms',
            'bathrooms',
            [// the owner name of the model
                'attribute' => 'latitude',
                'format' => 'raw',
                'value' => "<div id='property-map-view-latitude'>$model->latitude</div>",
            ],
            [// the owner name of the model
                'attribute' => 'longitude',
                'format' => 'raw',
                'value' => "<div id='property-map-view-longitude'>$model->longitude</div>",
            ],
            'address',
            'active',
            'datecreation:datetime',
            'datestart:datetime',
            'datelastupdate:datetime',
            'owner',
            'phoneowner',
            'emailowner:email',
            'priority',            
            [
                'attribute' => 'map',
                'format' => 'raw',
                'value' => '<a id="link-photo-map" target="_blank"><div id="property-map-view" class="loader-map"></div></a>',
            ],
        ],
    ])
    ?>

</div>
