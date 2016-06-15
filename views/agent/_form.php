<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Profile;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surnames')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?!-->

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
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
