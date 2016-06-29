<?php

namespace app\models;

use Yii;

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
    public $photos;

    public static function tableName() {
        return 'user';
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
            [['photos'], 'safe'],
            [['photos'], 'file', 'extensions' => 'jpg, gif, png'],
            [['photos'], 'file', 'maxSize' => '2000000'],
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
            'names' => 'Names',
            'surnames' => 'Surnames',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'active' => 'Active',
            'lastupdate' => 'Lastupdate',
            'type_id' => 'Type ID',
            'state_id' => 'State ID',
            'sex' => 'Sex',
            'profile_id' => 'Profile ID',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'parent' => 'Parent',
            'photos' => 'Fotos',
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
