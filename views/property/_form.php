<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Profile;
use kartik\form\ActiveForm;
use app\assets\LocateAsset;

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

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-property-latitude required">
        <label class="control-label col-md-2"><a class="btn btn-primary " onclick="<?php $maploader = "mapa_loader"; echo $maploader; ?>();">Mapa</a></label>  
             <div class="col-md-offset-2 col-md-10"><div id="map"></div></div>   
        <?php         //uniqid();
        $this->registerJs("function $maploader(){var map = new GMaps({
                el: '#map',
                lat: -12.043333,
                lng: -77.028333
            });}", yii\web\View::POS_READY, $maploader);
//        $coord = new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]);
//        $map = new app\assets\Map([
//            'center' => $coord,
//            'zoom' => 14,
//        ]);
//        // Display the map -finally :)
//        echo $map->display();
//    use yii\web\JsExpression;
        ?>

    </div>
    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
