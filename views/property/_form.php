<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Profile;
use kartik\form\ActiveForm;

//use dosamigos\google\maps\LatLng;
//use dosamigos\google\maps\services\DirectionsWayPoint;
//use dosamigos\google\maps\services\TravelMode;
//use dosamigos\google\maps\overlays\PolylineOptions;
//use dosamigos\google\maps\services\DirectionsRenderer;
//use dosamigos\google\maps\services\DirectionsService;
//use dosamigos\google\maps\overlays\InfoWindow;
//use dosamigos\google\maps\overlays\Marker;
//use dosamigos\google\maps\Map;
//use dosamigos\google\maps\services\DirectionsRequest;
//use dosamigos\google\maps\overlays\Polygon;
//use dosamigos\google\maps\layers\BicyclingLayer;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
/* @var $form yii\widgets\ActiveForm */
//echo var_dump($model)
//$coord = new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]);
//$map = new Map([
//    'center' => $coord,
//    'zoom' => 14,
//]);
?>

<div class="property-form">

    <?php
    $form = ActiveForm::begin([
                'type' => ActiveForm::TYPE_HORIZONTAL,
    ]);
    ?>

    <!--?= $form->field($model, 'id')->textInput() ?!-->

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->where(["category" => "property"])->all(), 'id', 'type')) ?>

    <?= $form->field($model, 'state_id')->dropDownList(ArrayHelper::map(State::find()->where(["category" => "property"])->all(), 'id', 'state')) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'money')->radioList(['S' => 'Soles', 'D' => 'Dolares']) ?>

    <?= $form->field($model, 'commission')->textInput() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'bathrooms')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'datecreation')->textInput() ?>

    <?= $form->field($model, 'datestart')->textInput() ?>

    <?= $form->field($model, 'datelastupdate')->textInput() ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneowner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailowner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>
    
    <div class="form-group">
        <label class="control-label" for="zoom">Zoom</label>
        <input class="form-control" type="text" name="zoom" id="zoom">
    </div>

    <?= \ibrarturi\latlngfinder\LatLngFinder::widget([
    'latAttribute' => 'latitude',        // Latitude text field id
    'lngAttribute' => 'longitude',        // Longitude text field id
    'zoomAttribute' => 'zoom',      // Zoom text field id
    'mapCanvasId' => 'map',         // Map Canvas id
    'mapWidth' => 450,              // Map Canvas width
    'mapHeight' => 300,             // Map Canvas mapHeight
//    'defaultLat' => -34.397,        // Default latitude for the map
//    'defaultLng' =>150.644,         // Default Longitude for the map
    'defaultZoom' => 8,             // Default zoom for the map
    'enableZoomField' => true,      // True: for assigning zoom values to the zoom field, False: Do not assign zoom value to the zoom field
]); ?>
    <!--?=
//             $map->display();
//            $form->field($model, 'address')->widget(SelectMapLocationWidget::className(), []); 
    ?-->




    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
