<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Inicia Sesion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <section class="short-image no-padding contact-short-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 short-image-title">
                    <h5 class="subtitle-margin second-color">Por favor</h5>
                    <h1 class="second-color"><?= Html::encode($this->title) ?></h1>
                    <div class="short-title-separator"></div>
                </div>
            </div>
        </div>

    </section>
    <section class="section-light section-both-shadow top-padding-45">
        <div class="container">
            <div class="row">

                <?php
                $form = ActiveForm::begin([
                            'id' => 'login-form-page',
                            'enableAjaxValidation' => true,
                            'options' => ['class' => 'form-horizontal'],
                            'fieldConfig' => [
                                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                'labelOptions' => ['class' => 'col-lg-1 control-label'],
                            ],
                ]);
                ?>

                <?= $form->field($model, 'username')->textInput(['class' => 'input-full main-input', 'placeholder' => 'Correo electronico'])->label(false); ?>
                <?= $form->field($model, 'password')->passwordInput(['class' => 'input-full main-input', 'placeholder' => 'Clave'])->label(false); ?>

                <a onclick="document.getElementById('login-form-page').submit();" class="button-primary button-shadow button-full">
                    <span>Sing In</span>
                    <div class="button-triangle"></div>
                    <div class="button-triangle2"></div>
                    <div class="button-icon"><i class="fa fa-user"></i></div>
                </a>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </section>
</div>
