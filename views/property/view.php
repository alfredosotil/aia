<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
?>
<div class="property-view">
 
    <?= DetailView::widget([
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
            'longitude',
            'latitude',
            'active',
            'datecreation',
            'datestart',
            'datelastupdate',
            'owner',
            'phoneowner',
            'emailowner:email',
        ],
    ]) ?>

</div>
