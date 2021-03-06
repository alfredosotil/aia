<?php

namespace app\controllers;

use Yii;
use app\models\Property;
use app\models\PropertySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use yii\imagine\Image;
use yii\web\UploadedFile;
use app\assets\AppAsset;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use kartik\mpdf\Pdf;

/**
 * PropertyController implements the CRUD actions for Property model.
 */
class PropertyController extends Controller {

    /**
     * @inheritdoc
     */
    public $layout = "dashboard";

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ["bulkDelete", "create", "delete", "index", "update", "view"],
                'rules' => [
                    [
                        'actions' => ["bulkDelete", "create", "delete", "index", "update", "view"],
                        'allow' => AppAsset::getAccess("property"),
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Property models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new PropertySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Property model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $request = Yii::$app->request;
        if ($request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => "Propiedad #" . $id,
                'content' => $this->renderAjax('view', [
                    'model' => $this->findModel($id),
                ]),
                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                Html::a('Editar', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
            ];
        } else {
            return $this->render('view', [
                        'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new Property model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $request = Yii::$app->request;
        $model = new Property();

        if ($request->isAjax) {
            /*
             *   Process for ajax request
             */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($request->isGet) {
                return [
                    'title' => "Crear Propiedad",
                    'content' => $this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                    Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                ];
            } else {
                $model->user_id = Yii::$app->user->identity->id;
                if ($model->load($request->post())) {
                    $extras = ArrayHelper::getValue($request->post(), 'Property.extras');
                    $images = UploadedFile::getInstances($model, 'photos');
                    if (!is_null($images) && count($images) > 0) {
                        if ($model->save()) {
                            $model->savePropertyDetails($extras);
                            Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/property/';
                            $property_id = $model->primaryKey;
                            $imageOrder = 1;
                            foreach ($images as $image) {
                                $ext = end((explode(".", $image->name)));
                                $imagename = Yii::$app->security->generateRandomString() . ".{$ext}";
                                $path = Yii::$app->params['uploadPath'] . $imagename;
                                $imageProperty = new \app\models\ImagesProperty();
                                $imageProperty->name = $imagename;
                                $imageProperty->order = $imageOrder++;
                                $imageProperty->active = 1;
                                $imageProperty->property_id = $property_id;
                                $imageProperty->save();
                                $image->saveAs($path);
                                Image::thumbnail(Yii::$app->params['uploadPath'] . $imagename, 140, 80)
                                        ->save(Yii::$app->params['uploadPath'] . 'sqr_' . $imagename, ['quality' => 50]);
                                Image::thumbnail(Yii::$app->params['uploadPath'] . $imagename, 30, 30)
                                        ->save(Yii::$app->params['uploadPath'] . 'sm_' . $imagename, ['quality' => 50]);
                            }
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Crear Propiedad",
                                'content' => '<span class="text-success">Crear Propiedad success</span>',
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Crear mas', ['create'], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Crear Propiedad",
                                'content' => $this->renderAjax('create', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                            ];
                        }
                    } else {
                        if ($model->save()) {
                            $model->savePropertyDetails($extras);
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Crear Propiedad",
                                'content' => 'sin imagen <span class="text-success">Crear Propiedad success</span>',
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Crear mas', ['create'], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Crear Propiedad",
                                'content' => $this->renderAjax('create', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                            ];
                        }
                    }
                } else {
                    return [
                        'title' => "Crear Propiedad",
                        'content' => $this->renderAjax('create', [
                            'model' => $model,
                        ]),
                        'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                    ];
                }
            }
        } else {
            /*
             *   Process for non-ajax request
             */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                            'model' => $model,
                ]);
            }
        }
    }

    /**
     * Updates an existing Property model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $request = Yii::$app->request;
        $model = $this->findModel($id);

        if ($request->isAjax) {
            /*
             *   Process for ajax request
             */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($request->isGet) {
                return [
                    'title' => "Actualizar Propiedad #" . $id,
                    'content' => $this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                    Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                ];
            } else {

                if ($model->load($request->post())) {
                    $extras = ArrayHelper::getValue($request->post(), 'Property.extras');
                    $images = UploadedFile::getInstances($model, 'photos');
                    if (!is_null($images) && count($images) > 0) {
                        $imagesProperty = \app\models\ImagesProperty::find()->where(['property_id' => $id])->all();
                        if (count($imagesProperty) > 0) {
                            $model->deleteImages();
                            \app\models\ImagesProperty::deleteAll(['property_id' => $id]);
                        }
                        if ($model->save()) {
                            $model->savePropertyDetails($extras);
                            Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/property/';
                            $property_id = $model->primaryKey;
                            $imageOrder = 1;
                            foreach ($images as $image) {
                                $ext = end((explode(".", $image->name)));
                                $imagename = Yii::$app->security->generateRandomString() . ".{$ext}";
                                $path = Yii::$app->params['uploadPath'] . $imagename;
                                $imageProperty = new \app\models\ImagesProperty();
                                $imageProperty->name = $imagename;
                                $imageProperty->order = $imageOrder++;
                                $imageProperty->active = 1;
                                $imageProperty->property_id = $property_id;
                                $imageProperty->save();
                                $image->saveAs($path);
                                Image::thumbnail(Yii::$app->params['uploadPath'] . $imagename, 140, 80)
                                        ->save(Yii::$app->params['uploadPath'] . 'sqr_' . $imagename, ['quality' => 50]);
                                Image::thumbnail(Yii::$app->params['uploadPath'] . $imagename, 30, 30)
                                        ->save(Yii::$app->params['uploadPath'] . 'sm_' . $imagename, ['quality' => 50]);
                            }
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Propiedad #" . $id,
                                'content' => $this->renderAjax('view', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Editar', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Actualizar Propiedad #" . $id,
                                'content' => $this->renderAjax('update', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                            ];
                        }
                    } else {
                        if ($model->save()) {
                            $model->savePropertyDetails($extras);
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Propiedad #" . $id,
                                'content' => $this->renderAjax('view', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Editar', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Actualizar Propiedad #" . $id,
                                'content' => $this->renderAjax('update', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                            ];
                        }
                    }
                } else {
                    return [
                        'title' => "Actualizar Propiedad #" . $id,
                        'content' => $this->renderAjax('update', [
                            'model' => $model,
                        ]),
                        'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                    ];
                }
            }
        } else {
            /*
             *   Process for non-ajax request
             */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                            'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing Property model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $request = Yii::$app->request;
        $model = $this->findModel($id);
        $imagesProperty = \app\models\ImagesProperty::find()->where(['property_id' => $id])->all();
        if (count($imagesProperty) > 0) {
            $model->deleteImages();
        }
        $model->delete();

        if ($request->isAjax) {
            /*
             *   Process for ajax request
             */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose' => true, 'forceReload' => '#crud-datatable-pjax'];
        } else {
            /*
             *   Process for non-ajax request
             */
            return $this->redirect(['index']);
        }
    }

    /**
     * Delete multiple existing Property model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionBulkDelete() {
        $request = Yii::$app->request;
        $pks = explode(',', $request->post('pks')); // Array or selected records primary keys
        foreach ($pks as $pk) {
            $model = $this->findModel($pk);
            $model->deleteImages();
            $model->delete();
        }

        if ($request->isAjax) {
            /*
             *   Process for ajax request
             */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose' => true, 'forceReload' => '#crud-datatable-pjax'];
        } else {
            /*
             *   Process for non-ajax request
             */
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Property model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Property the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Property::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPdfproperty($id) {
        $img = Html::img("@web/images/loader.png", ['width' => 40, 'class' => 'img-responsive', 'alt' => 'AIA Asesoria Inmobiliaria']);
        $pdf = new Pdf([
            'mode' => Pdf::MODE_CORE, // leaner size using standard fonts
            'content' => $this->renderPartial('pdfclient', [
                'model' => $this->findModel($id),
            ]),
            'options' => [
                'title' => 'Propiedad de AIA - www.aia.com.pe',
                'subject' => '---'
            ],
            'methods' => [
                'SetHeader' => ['Generado por AIA Asesoria Inmobiliaria||Generado el día: ' . date("r")],
                'SetFooter' => ["$img |Pagina {PAGENO}| Calle Coronel Inclan 425 int. 104. <br>telf: +51(01)4785767"],
            ]
        ]);
        return $pdf->render();
    }

}
