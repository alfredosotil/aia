<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'submitproperty'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'submitproperty'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionFindproperty() {
        return $this->render('findproperty');
    }

    public function actionAboutus() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('aboutus', [
                    'model' => $model,
        ]);
    }

    public function actionServices() {
        return $this->render('services');
    }

    public function actionWorkwithus() {
        return $this->render('workwithus');
    }

    public function actionSubmitproperty() {
        return $this->render('submitproperty');
    }

    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContactus() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contactus', [
                    'model' => $model,
        ]);
    }

    public function actionViewproperty($id) {
        $model = \app\models\Property::findOne($id);
//        $model->getAgent()->one()->email;
        $modelContactForm = new ContactForm();
        if ($modelContactForm->load(Yii::$app->request->post()) && $modelContactForm->contact($model->getAgent()->one()->email)) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('viewproperty',[
            'modelcf' => $modelContactForm,
            'model' => $model
        ]);
    }
    
    public function getMainSlider() {
        $html = "";
        $properties = \app\models\Property::getPropertyByPriority(5, 10); //limit 20
        $cont = 1;
        $position = 1;
        foreach ($properties as $p) {
            if ($position > 3) {
                $position = 1;
            }
            $html .= $this->renderPartial('propertymainslider', ['model' => $p, 'cont' => $cont, 'position' => $position]);
            $cont++;
            $position++;
        }
        return $html;
    }

    public function getRecentlyAdded() {
        $html = "";
        $properties = \app\models\Property::getPropertiesRecentlyAdded(15, 20); //limit 20
        foreach ($properties as $p) {
            $html .= $this->renderPartial('propertyrecentlyaddedslider', ['model' => $p]);
        }
        return $html;
    }

    public function getAgentsSlider() {
        $html = "";
        $agents = \app\models\Agent::getAgents(10); //limit 20
        foreach ($agents as $a) {
            $html .= $this->renderPartial('agentslider', ['model' => $a]);
        }
        return $html;
    }


}
