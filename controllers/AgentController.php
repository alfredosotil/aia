<?php

namespace app\controllers;

class AgentController extends \yii\web\Controller {

    public $layout = "dashboard";

    public function actionIndex() {
        return $this->render('index');
    }

}
