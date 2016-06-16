<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="agent-view">
 
    <?= DetailView::widget([
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
        ],
    ]) ?>

</div>
