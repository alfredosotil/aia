<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $names
 * @property string $surnames
 * @property string $email
 * @property string $username
 * @property string $password
 * @property integer $active
 * @property string $lastupdate
 * @property integer $type_id
 * @property integer $state_id
 * @property string $sex
 * @property integer $profile_id
 * @property string $authKey
 * @property string $accessToken
 * @property integer $parent
 * @property string $avatar
 *
 * @property Profile $profile
 * @property State $state
 * @property Type $type
 */
class User extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $photo;
    public $path = '/web/uploads/user/';

    public static function tableName() {
        return 'user';
    }

    public function behaviors() {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['lastupdate'],
                ],
                'value' => function() {
            return date('Y-m-d H:i:s');
        },
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['names', 'surnames', 'email', 'username', 'password', 'active', 'type_id', 'state_id', 'sex', 'profile_id'], 'required'],
            [['active', 'type_id', 'state_id', 'profile_id', 'parent'], 'integer'],
            [['lastupdate'], 'safe'],
            [['names'], 'string', 'max' => 100],
            [['photo'], 'safe'],
            [['photo'], 'file', 'extensions' => 'jpg, gif, png'],
//            [['photo'], 'file', 'maxSize' => '2000000'],
            [['surnames', 'email', 'username', 'password', 'authKey', 'accessToken'], 'string', 'max' => 45],
            [['email'], 'email'],
            [['sex'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'names' => 'Nombres',
            'surnames' => 'Apellidos',
            'email' => 'Correo Electronico',
            'username' => 'Nombre de usuario',
            'password' => 'Clave',
            'active' => 'Activo',
            'lastupdate' => 'Ultima actualizacion',
            'type_id' => 'Tipo ID',
            'state_id' => 'Estado ID',
            'sex' => 'Sexo',
            'profile_id' => 'Perfil ID',
            'authKey' => 'Auth Key',
            'accessToken' => 'Acceso Token',
            'parent' => 'Parent',
            'photo' => 'Fotos',
            'avatar' => 'Avatar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile() {
        return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState() {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType() {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    public function deleteImage($path, $filename) {
        $file = [];
        $file[] = $path . $filename;
        $file[] = $path . 'sqr_' . $filename;
        $file[] = $path . 'sm_' . $filename;
        foreach ($file as $f) {
            // check if file exists on server
            if (!empty($f) && file_exists($f)) {
                // delete file
                unlink($f);
            }
        }
    }

}
