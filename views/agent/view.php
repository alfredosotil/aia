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
            'password',
            'active',
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
                'value' => yii\helpers\Html::img("@web/uploads/user/$model->avatar", ['class' => 'pull-left img-responsive'])
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
