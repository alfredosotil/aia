<?php

use yii\helpers\Url;
use kartik\grid\GridView;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'id',
    // ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'user_id',
    ],
//    [
//        'class' => '\kartik\grid\DataColumn',
//        'attribute' => 'type_id',
//    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'label' => 'Tipo de Inmueble',
        'attribute' => 'type',
        'value' => 'type.type',
    ],
//    [
//        'class' => '\kartik\grid\DataColumn',
//        'attribute' => 'state_id',
//    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'label' => 'Estado del inmueble',
        'attribute' => 'state',
        'value' => 'state.state',
    ],
    [
//        'vAlign' => 'middle',
        'width' => '180px',
//        'class' => '\kartik\grid\DataColumn',
        'value' => 'distrito.distrito',
        'attribute' => 'distrito_id',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => \yii\helpers\ArrayHelper::map(app\models\Distrito::find()->orderBy('distrito')->asArray()->all(), 'idDist', 'distrito'),
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Distrito'],
        'format' => 'raw'
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'priority',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'price',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'money',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'commission',
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'area',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'bedrooms',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'bathrooms',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'longitude',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'latitude',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'active',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'datecreation',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'datestart',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'datelastupdate',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'owner',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'phoneowner',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'emailowner',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function($action, $model, $key, $index) {
            return Url::to([$action, 'id' => $key]);
        },
                'viewOptions' => ['role' => 'modal-remote', 'title' => 'Ver', 'data-toggle' => 'tooltip'],
                'updateOptions' => ['role' => 'modal-remote', 'title' => 'Actualizar', 'data-toggle' => 'tooltip'],
                'deleteOptions' => ['role' => 'modal-remote', 'title' => 'Borrar',
                    'data-confirm' => false, 'data-method' => false, // for overide yii data api
                    'data-request-method' => 'post',
                    'data-toggle' => 'tooltip',
                    'data-confirm-title' => 'Are you sure?',
                    'data-confirm-message' => 'Are you sure want to delete this item'],
            ],
        ];
        