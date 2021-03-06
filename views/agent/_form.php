<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Profile;
use kartik\form\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Agent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agent-form">

    <?php
    $form = ActiveForm::begin([
                'type' => ActiveForm::TYPE_HORIZONTAL,
                'options' => ['enctype' => 'multipart/form-data']
    ]);
    ?>

    <!--?= $form->field($model, 'id')->hiddenInput() ?!-->
    
    <?= $form->field($model, 'names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surnames')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'email')->hiddenInput()->label(false) ?!-->

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <!--?= $form->field($model, 'lastupdate')->textInput() ?!-->

    <!--?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->where(["category" => "user"])->all(), 'id', 'type')) ?!-->

    <?= $form->field($model, 'state_id')->dropDownList(ArrayHelper::map(State::find()->where(["category" => "user"])->all(), 'id', 'state')) ?>

    <?= $form->field($model, 'sex')->radioList(['M' => 'Male', 'F' => 'Female']) ?>

    <!--?= $form->field($model, 'profile_id')->textInput() ?!-->

    <!--?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?!-->

    <!--?= $form->field($model, 'accessToken')->textInput(['maxlength' => true]) ?!-->

    <!--?= $form->field($model, 'parent')->textInput() ?!-->

    <?=
    $form->field($model, 'photo')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'showCaption' => false,
            'showRemove' => true,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Selecciona la foto'
        ],
        'options' => [
            'accept' => 'image/*',
//            'multiple' => true
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
