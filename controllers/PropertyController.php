<?php

namespace app\controllers;

class PropertyController extends \yii\web\Controller {

    public $layout = "dashboard";

    public function actionIndex() {
        return $this->render('index');
    }

}
