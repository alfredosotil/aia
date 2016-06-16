<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\State;
use app\models\Profile;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
/* @var $form yii\widgets\ActiveForm */
//echo var_dump($model)
?>

<div class="property-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'id')->textInput() ?!-->

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->where(["category" => "property"])->all(), 'id', 'type')) ?>

    <?= $form->field($model, 'state_id')->dropDownList(ArrayHelper::map(State::find()->where(["category" => "property"])->all(), 'id', 'state')) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'money')->radioList(['S' => 'Soles', 'D' => 'Dolares']) ?>

    <?= $form->field($model, 'commission')->textInput() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'bathrooms')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'datecreation')->textInput() ?>

    <?= $form->field($model, 'datestart')->textInput() ?>

    <?= $form->field($model, 'datelasupdate')->textInput() ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneowner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailowner')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
