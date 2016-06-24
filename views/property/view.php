<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
?>
<div class="property-view">

    <?=
    DetailView::widget([
        'model' => $model,
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
            [                      // the owner name of the model
                'attribute' => 'latitude',
                'format' => 'raw',
                'value' => "<div id='property-map-view-latitude'>$model->latitude</div>",
            ],
            [                      // the owner name of the model
                'attribute' => 'longitude',
                'format' => 'raw',
                'value' => "<div id='property-map-view-longitude'>$model->longitude</div>",
            ],
            'address',
            'active',
            'datecreation',
            'datestart',
            'datelastupdate',
            'owner',
            'phoneowner',
            'emailowner:email',
            [                      // the owner name of the model
                'attribute' => 'map',
                'format' => 'raw',
                'value' => '<div id="property-map-view" class="loader-map"></div>',
            ],
        ],
    ])
    ?>

</div>
