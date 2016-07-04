<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="user-view">

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'names',
            'surnames',
            'email:email',
            'username',
            'password',
            [
                'label' => 'Active',
                'type' => 'html',
                'format' => 'raw',
                'value' => ($model->active == 1)?'<span class="label label-success">Yes</span>':'<span class="label label-danger">No</span>',
            ],
            'lastupdate',
            'type_id',
            'state_id',
            'sex',
            'profile_id',
            'authKey',
            'accessToken',
            'parent',
            [// the owner name of the model
                'attribute' => 'avatar',
                'format' => 'raw',
                'value' => yii\helpers\Html::img(isset($model->avatar)?"@web/uploads/user/sqr_$model->avatar":"@web/images/avatar-generic.jpg", ['class' => 'pull-left img-responsive'])
            ]
        ],
    ])
    ?>

</div>
