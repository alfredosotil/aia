<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
CrudAsset::register($this);
$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
//$info = AppAsset::executeQuery(Yii::$app->db, "select m.id 
//            from access a, profile p, module m 
//            where 
//            a.profile_id=p.id 
//            and a.module_id=m.id 
//            and p.id=:PROFILE_ID 
//            and m.controller=:CONTROLLER", [':PROFILE_ID' => Yii::$app->user->identity->profile_id, ':CONTROLLER' => "user"]);
//echo var_dump($info)."<br>";
//echo print_r($info)."<br>";
//echo var_dump(Yii::$app->user->identity->profile_id)."<br>";
//echo var_dump(Yii::$app->user->identity->names)."<br>";
        
?>

<div class="user-index">
    <div id="" class="page-header wow fadeIn" style=""  data-wow-duration="1000ms">
        <h1><i class='fa fa-fw fa-users'></i><span><?= $this->title; ?></span></h1>    
    </div>
    <div id="ajaxCrudDatatable">
        <?=
        GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['role' => 'modal-remote', 'title' => 'Create new User', 'class' => 'btn btn-default']) .
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax' => 1, 'class' => 'btn btn-default', 'title' => 'Reset Grid']) .
                    '{toggleData}' .
                    '{export}'
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'info',
                'heading' => '<i class="glyphicon glyphicon-list"></i> User listing',
                'before' => '<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after' => BulkButtonWidget::widget([
                    'buttons' => Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All', ["bulk-delete"], [
                        "class" => "btn btn-danger btn-xs",
                        'role' => 'modal-remote-bulk',
                        'data-confirm' => false, 'data-method' => false, // for overide yii data api
                        'data-request-method' => 'post',
                        'data-confirm-title' => 'Are you sure?',
                        'data-confirm-message' => 'Are you sure want to delete this item'
                    ]),
                ]) .
                '<div class="clearfix"></div>',
            ]
        ])
        ?>
    </div>
</div>
<?php
Modal::begin([
    "id" => "ajaxCrubModal",
    "footer" => "", // always need it for jquery plugin
])
?>
<?php Modal::end(); ?>
