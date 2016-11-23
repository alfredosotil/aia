<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropertySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Propiedades');
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs("
    $(document).on('click', '#saveButton', function () {
        if ($('form#propertyForm>div.has-error').length !== 0) {
            alert($('form#propertyForm>div.has-error').length + ' campos obligatorios sin llenar...');
        }else{
//                var b = $(this);
//                b.button('loading');
//                  setTimeout(function() {
//                     b.button('reset');
//                 }, 3000);

//            var len = $(this).length;
//            console.log(len);
//            var b = $(this);
//            b.html(b.data('loading-text'));
//            b.button('loading');
        }
    });
    $('#propertyForm').on('ajaxBeforeSend', function (event, jqXHR, settings) {
        // Activate waiting label
        console.log('before send');
    }).on('ajaxComplete', function (event, jqXHR, textStatus) {
        // Deactivate waiting label
        console.log($('send complete'));
    });
    ", yii\web\View::POS_LOAD, uniqid());
CrudAsset::register($this);
//echo Html::button('Guardar test', ['id' => 'saveButton', 'class' => 'btn btn-primary', "data-loading-text" => "<i class='fa fa-circle-o-notch fa-spin'></i> Subiendo Propiedad", 'type' => "submit"])
?>
<!--<script src="<?php echo Yii::$app->request->baseUrl ?>/js/gmaps.min.js"></script>-->
<div class="row property-index">
    <div id="title-module" class="page-header wow fadeIn" style=""  data-wow-duration="1000ms">
        <h1><i class='fa fa-fw fa fa-building'></i><span><?= $this->title; ?></span></h1>    
    </div>
    <div id="ajaxCrudDatatable">
        <?=
        GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'pjaxSettings' => [
                'neverTimeout' => true,
                'loadingCssClass' => true,
            ],
            'columns' => require(__DIR__ . '/_columns.php'),
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['role' => 'modal-remote', 'title' => 'Crear nueva Propiedad', 'class' => 'btn btn-default']) .
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax' => 1, 'class' => 'btn btn-default', 'title' => 'Reset Grid']) .
                    '{toggleData}' .
                    '{export}'
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'warning',
                'heading' => '<i class="glyphicon glyphicon-list"></i> Listado de Propiedades',
//                'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after' => BulkButtonWidget::widget([
                    'buttons' => Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Borrar', ["bulk-delete"], [
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
    "id" => "ajaxCrudModal",
    "size" => Modal::SIZE_LARGE,
    "options" => ['class' => 'property'],
    "footer" => "", // always need it for jquery plugin
])
?>
<?php Modal::end(); ?>
