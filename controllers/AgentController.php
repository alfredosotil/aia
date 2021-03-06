<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\ImagesUser;
use app\models\AgentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;
use app\assets\AppAsset;
use yii\filters\AccessControl;

/**
 * AgentController implements the CRUD actions for User model.
 */
class AgentController extends Controller {

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
                        'allow' => AppAsset::getAccess("agent"),
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new AgentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $request = Yii::$app->request;
        if ($request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => "User #" . $id,
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
     * Creates a new User model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $request = Yii::$app->request;
        $model = new User();

        if ($request->isAjax) {
            /*
             *   Process for ajax request
             */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($request->isGet) {
                return [
                    'title' => "Crear Agente",
                    'content' => $this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                    Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                ];
            } else {
                $model->profile_id = \app\models\Profile::find()->where(['name' => 'Agente', 'category' => 'user'])->one()->id;
                $model->type_id = \app\models\Type::find()->where(['type' => 'Agente', 'category' => 'user'])->one()->id;
                $model->parent = Yii::$app->user->identity->id;
                $username = ArrayHelper::getValue($request->post(), 'User.username');
                $model->email = "$username@aia.com.pe";
                if ($model->load($request->post())) {
                    $image = UploadedFile::getInstance($model, 'photo');
                    if (!is_null($image)) {
                        $ext = end((explode(".", $image->name)));
                        // generate a unique file name to prevent duplicate filenames
                        $model->avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
                        if ($model->save()) {
                            $imageUser = new ImagesUser();
                            // save with image
                            // store the source file name                            
                            $imageUser->name = $model->avatar;
                            // the path to save file, you can set an uploadPath
                            // in Yii::$app->params 
                            Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/user/';
                            $path = Yii::$app->params['uploadPath'] . $model->avatar;

                            $imageUser->order = 1;
                            $imageUser->active = 1;
                            $imageUser->user_id = $model->primaryKey;
                            $imageUser->save();
//                            ob_start();
//                            var_dump($imageUser->save());
//                            $result = ob_get_clean();
//                            $valorx = $result;
                            $image->saveAs($path);
                            Image::thumbnail(Yii::$app->params['uploadPath'] . $model->avatar, 120, 120)
                                    ->save(Yii::$app->params['uploadPath'] . 'sqr_' . $model->avatar, ['quality' => 50]);
                            Image::thumbnail(Yii::$app->params['uploadPath'] . $model->avatar, 30, 30)
                                    ->save(Yii::$app->params['uploadPath'] . 'sm_' . $model->avatar, ['quality' => 50]);
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Crear Agente",
                                'content' => "<span class='text-success'>Crear Agente success</span>",
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Crear mas', ['create'], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Crear Agente",
                                'content' => $this->renderAjax('create', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                            ];
                        }
                    } else {
                        if ($model->save()) {
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Crear Agente",
                                'content' => '<span class="text-success">Crear Agente success</span>',
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Crear mas', ['create'], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Crear Agente",
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
                        'title' => "Crear Agente",
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
     * Updates an existing User model.
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
                    'title' => "Actualizar Agente #" . $id,
                    'content' => $this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                    Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                ];
            } else {
                if ($model->load($request->post())) {
                    $image = UploadedFile::getInstance($model, 'photo');
                    if (!is_null($image)) {
                        $imageUser = ImagesUser::find()->where(['user_id' => $model->primaryKey])->one();
                        if (!isset($imageUser)) {
                            $imageUser = new ImagesUser();
                            $imageUser->user_id = $model->primaryKey;
                        }
                        $ext = end((explode(".", $image->name)));
                        $hasimage = $model->avatar;
                        // generate a unique file name to prevent duplicate filenames
                        $model->avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
                        $imageUser->name = $model->avatar;
                        // the path to save file, you can set an uploadPath
                        // in Yii::$app->params 
                        Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/user/';
                        $path = Yii::$app->params['uploadPath'] . $model->avatar;
                        if ($model->save()) {
                            if (isset($hasimage)) {
                                $model->deleteImage(Yii::$app->params['uploadPath'], $hasimage);
                            }
                            $imageUser->order = 1;
                            $imageUser->active = 1;
                            $imageUser->save();
                            $image->saveAs($path);
                            Image::thumbnail(Yii::$app->params['uploadPath'] . $model->avatar, 120, 120)
                                    ->save(Yii::$app->params['uploadPath'] . 'sqr_' . $model->avatar, ['quality' => 50]);
                            Image::thumbnail(Yii::$app->params['uploadPath'] . $model->avatar, 30, 30)
                                    ->save(Yii::$app->params['uploadPath'] . 'sm_' . $model->avatar, ['quality' => 50]);
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Agente #" . $id,
                                'content' => $this->renderAjax('view', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Editar', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Agente #" . $id,
                                'content' => $this->renderAjax('view', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Editar', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        }
                    } else {
                        if ($model->save()) {
                            return [
                                'forceReload' => '#crud-datatable-pjax',
                                'title' => "Agente #" . $id,
                                'content' => $this->renderAjax('view', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::a('Editar', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                            ];
                        } else {
                            return [
                                'title' => "Actualizar Agente #" . $id,
                                'content' => $this->renderAjax('update', [
                                    'model' => $model,
                                ]),
                                'footer' => Html::button('Cerrar', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                                Html::button('Guardar', ['class' => 'btn btn-primary', 'type' => "submit"])
                            ];
                        }
                    }
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
     * Delete an existing User model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $request = Yii::$app->request;
        $model = $this->findModel($id);
        $hasimage = $model->avatar;
        $model->delete();
        if (isset($hasimage)) {
            $model->deleteImage(Yii::$app->basePath . '/web/uploads/user/', $hasimage);
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
     * Delete multiple existing User model.
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
            $hasimage = $model->avatar;
            $model->delete();
            if (isset($hasimage)) {
                $model->deleteImage(Yii::$app->basePath . '/web/uploads/user/', $hasimage);
            }
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
