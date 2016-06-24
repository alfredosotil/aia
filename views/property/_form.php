<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Profile;
use kartik\form\ActiveForm;
use app\assets\LocateAsset;
use kartik\file\FileInput;

//LocateAsset::register($this);
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

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <div class="form-group field-property-map">
        <label class="control-label col-md-2" for="map">Mapa</label>
        <div class="col-md-10">
            <!--<a class="btn btn-primary btn-block" onclick="getMapProperty()">Cargar</a>-->
            <div id="property-map" class="loader-map"></div>
        </div>
        <div class="col-md-offset-2 col-md-10"></div>
        <div class="col-md-offset-2 col-md-10"><div class="help-block"></div></div>
    </div>  

    <?=
    $form->field($model, 'photos')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => true,
            'showUpload' => true,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Selecciona las fotos'
        ],
        'options' => [
            'accept' => 'image/*',
            'multiple' => true
            ],
    ]);
    ?>

    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
