<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Distrito;
use app\models\Profile;
use kartik\form\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\widgets\StarRating;

//LocateAsset::register($this);
?>

<div class="property-form">

    <?php
    $form = ActiveForm::begin([
                'type' => ActiveForm::TYPE_HORIZONTAL,
                'options' => ['enctype' => 'multipart/form-data']
    ]);
    ?>

    <!--?= $form->field($model, 'id')->textInput() ?!-->

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->where(["category" => "property"])->all(), 'id', 'type')) ?>

    <?= $form->field($model, 'state_id')->dropDownList(ArrayHelper::map(State::find()->where(["category" => "property"])->all(), 'id', 'state')) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'money')->radioList(['S' => 'Soles', 'D' => 'Dolares']) ?>

    <?= $form->field($model, 'commission', ['addon' => ['prepend' => ['content' => '%']]])->textInput() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'furnished')->checkbox() ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'bathrooms')->textInput() ?>

    <?= $form->field($model, 'garages')->textInput() ?>

    <?= $form->field($model, 'yearsold')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <!--?= $form->field($model, 'datecreation')->textInput(['maxlength' => true, 'readonly' => true]) ?!-->

    <?=
    $form->field($model, 'datestart')->widget(DatePicker::classname(), [
//        'name' => 'anniversary',
//        'value' => date('Y-m-d'),
        'readonly' => true,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <!--?= $form->field($model, 'datelastupdate')->textInput(['maxlength' => true, 'readonly' => true]) ?!-->

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneowner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailowner')->textInput(['maxlength' => true]) ?>

    <?php
    if (Yii::$app->user->identity->profile_id === 2 || Yii::$app->user->identity->profile_id === 1) {
        echo $form->field($model, 'priority')->widget(StarRating::classname(), [
            'language' => 'es',
            'pluginOptions' => [
                'min' => 0,
                'max' => 5,
                'step' => 1,
                'size' => 'lg',
                'starCaptions' => [
                    0 => 'sin prioridad',
                    1 => 'baja',
                    2 => 'media baja',
                    3 => 'media',
                    4 => 'media alta',
                    5 => 'alta',
                ],
                'starCaptionClasses' => [
                    0 => 'text-danger',
                    1 => 'text-danger',
                    2 => 'text-danger',
                    3 => 'text-warning',
                    4 => 'text-info',
                    5 => 'text-success',
                ],
            ]
        ]);
        $this->registerJsFile('@web/js/star-rating_locale_es.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
    }
    ?>

    <?= $form->field($model, 'description')->textArea(['maxlength' => true, 'rows' => '6']) ?>

    <?= $form->field($model, 'distrito_id')->dropDownList(ArrayHelper::map(Distrito::find()->where(["idProv" => 127])->orderBy('distrito')->all(), 'idDist', 'distrito')) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'references')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-property-map">
        <label class="control-label col-md-2" for="map">Mapa</label>
        <div class="col-md-10">
            <input id="pac-input" class="controls" type="text" placeholder="Buscar lugar">
            <div id="property-map" class="loader-map"></div>
        </div>
        <div class="col-md-offset-2 col-md-10"></div>
        <div class="col-md-offset-2 col-md-10"><div class="help-block"></div></div>
    </div>
    <?php $this->registerJs("getMapProperty();", yii\web\View::POS_END, uniqid()); ?>
    <?php
    if (!$model->isNewRecord) {
        $model->extras = ArrayHelper::getColumn($model->getAccesspropertydetails()->all(), 'property_detail_id');
    }
    ?>
    <?= $form->field($model, 'extras')->checkboxList(ArrayHelper::map(app\models\PropertyDetail::find()->all(), 'id', 'name'), ['inline' => false]) ?>

    <?=
    $form->field($model, 'photos[]')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'showCaption' => false,
            'showRemove' => true,
            'showUpload' => false,
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
