<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="agent-view">

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'names',
            'surnames',
            'email:email',
            'username',
//            'password',
            [
                'attribute' => 'active',
                'format' => 'raw',
                'value' => ($model->active == 1)?'<span class="label label-success">Si</span>':'<span class="label label-danger">No</span>',
            ],
            'lastupdate',
            'type.type',
            'state.state',
            'sex',            
            [
                'attribute' => 'profile.name',
                'label' => 'Perfil de Usuario',
            ],
            'authKey',
            'accessToken',
            'parent',
            [// the owner name of the model
                'attribute' => 'avatar',
                'format' => 'raw',
                'value' => yii\helpers\Html::img(isset($model->avatar)?"@web/uploads/user/sqr_$model->avatar":"@web/images/avatar-generic.jpg", ['class' => 'pull-left img-responsive'])
            ]
//            [// the owner name of the model
//                'attribute' => 'avatar',
//                'format' => 'raw',
//                'value' => \cebe\gravatar\Gravatar::widget([
//                    'email' => $model->email,
//                    'defaultImage' => \yii\helpers\Url::to('@web/uploads/user/'). $model->avatar,
//                    'options' => [
//                        'class' => 'profile-image',
//                        'alt' => $model->username,
//                    ],
//                    'size' => 128,
//                ])
//            ],
        ],
    ])
    ?>

</div>
