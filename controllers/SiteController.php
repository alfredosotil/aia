<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Property;

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
        $propertyOffers = Property::find()->where(['active' => 1]);
        if ($request->isPost) {
            $transaction = $request->post('transaction');
            $inmueble = $request->post('inmueble');
            $district = $request->post('district');
            $price = explode(" - ", $request->post('price'));
            $area = explode(" - ", $request->post('area'));
            $bedrooms = explode(" - ", $request->post('bedrooms'));
            $bathrooms = explode(" - ", $request->post('bathrooms'));
            if (!is_null($transaction)) {
                $propertyOffers->andWhere(['state_id' => $transaction]);
            }
            if (!is_null($inmueble)) {
                $propertyOffers->andWhere(['type_id' => $inmueble]);
            }
            if (!is_null($district)) {
                $propertyOffers->andWhere(['distrito_id' => $district]);
            }
            $propertyOffers->andWhere(['between', 'price', $price[0], $price[1]]);
            $propertyOffers->andWhere(['between', 'area', $area[0], $area[1]]);
            $propertyOffers->andWhere(['between', 'bedrooms', $bedrooms[0], $bedrooms[1]]);
            $propertyOffers->andWhere(['between', 'bathrooms', $bathrooms[0], $bathrooms[1]]);
            $variables = $request->post();
//            echo json_encode($variables);
            if ($request->isAjax) {
                /*
                 *   Process for ajax request
                 */
                Yii::$app->response->format = Response::FORMAT_JSON;
                $po = $propertyOffers->all();
                return [
                    'counterpropertyOffers' => count($po),
                    'propertyOffers' => $this->getPropertyOffers($po, true),
                    'mapInit' => $this->generateMapInit($po)
                ];
            } else {
                return $this->render('findproperty', ['propertyListing' => $this->renderPartial('propertylisting', ['properties' => $propertyOffers->all()])]);
            }
        } else {
            return $this->render('findproperty', ['propertyListing' => $this->renderPartial('propertylisting', ['properties' => $propertyOffers->all()])]);
        }
    }

    public function actionAboutus() {
        $p = new ContactForm();
        if ($p->load(Yii::$app->request->post()) && $p->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('aboutus', [
                    'model' => $p,
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

        $p = new LoginForm();
        if ($p->load(Yii::$app->request->post()) && $p->login()) {
            return $this->goBack();
        }

        if (Yii::$app->request->isAjax && $p->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($p);
        }

        return $this->render('login', [
                    'model' => $p,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContactus() {
        $p = new ContactForm();
        if ($p->load(Yii::$app->request->post()) && $p->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contactus', [
                    'model' => $p,
        ]);
    }

    public function actionViewproperty($id) {
        $p = \app\models\Property::findOne($id);
//        $p->getAgent()->one()->email;
        $pContactForm = new ContactForm();
        if ($pContactForm->load(Yii::$app->request->post()) && $pContactForm->contact($p->getAgent()->one()->email)) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('viewproperty', [
                    'modelcf' => $pContactForm,
                    'model' => $p
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
        $properties = \app\models\Property::getPropertiesRecentlyAdded(60, 20); //limit 20
        foreach ($properties as $p) {
            $html .= $this->renderPartial('propertyrecentlyaddedslider', ['model' => $p]);
        }
        return $html;
    }

    public function getPropertyOffers($properties, $ajax) {
        $html = "";
        foreach ($properties as $p) {
            $html .= $this->renderPartial('propertyoffer', ['model' => $p, 'ajax' => $ajax]);
        }
        return $html;
    }

    public function generateMapInit($properties) {
        $mapInit = [];
        foreach ($properties as $p) {
            $mapInit[] = "mapInit($p->latitude, $p->longitude, 'list-map$p->id', '" . Yii::$app->request->baseUrl . \app\assets\AppAsset::getIconPingProperty($p->getType()->one()->type) . "', false)";
        }
        return $mapInit;
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
