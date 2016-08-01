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
        $request = Yii::$app->request;
        if ($request->isAjax) {
            /*
             *   Process for ajax request
             */
            Yii::$app->response->format = Response::FORMAT_JSON;
        }else{
            if ($request->isPost) {
                $propertyOffers = \app\models\Property::find()->where(['active' => 1]);
                $transaction = Yii::$app->request->post('transaction');
                $district = Yii::$app->request->post('district');
                $price = explode(" - ",Yii::$app->request->post('price'));
                $area = explode(" - ",Yii::$app->request->post('area'));
                $bedrooms = explode(" - ",Yii::$app->request->post('bedrooms'));
                $bathrooms = explode(" - ",Yii::$app->request->post('bathrooms'));
                if(!is_null($transaction)){
                    $propertyOffers->andWhere(['state_id' => $transaction]);
                }
                if(!is_null($district)){
                    $propertyOffers->andWhere(['distrito_id' => $district]);
                }
                $propertyOffers->andWhere(['between', 'price', $price[0], $price[1]]);
                $propertyOffers->andWhere(['between', 'area', $area[0], $area[1]]);
                $propertyOffers->andWhere(['between', 'bedrooms', $bedrooms[0], $bedrooms[1]]);
                $propertyOffers->andWhere(['between', 'bathrooms', $bathrooms[0], $bathrooms[1]]);
                $variables = Yii::$app->request->post();
                return $this->render('findproperty', ['propertyOffers' => $this->getPropertyOffers($propertyOffers->all())]);
//                echo json_encode($variables);
            }
        }
//        return $this->render('findproperty');
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
    
    public function getPropertyOffers($properties){
        $html = "";
        foreach ($properties as $p) {
            $html .= $this->renderPartial('propertyoffer', ['model' => $p]);
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
