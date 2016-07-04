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
 * @property ImagesUser[] $imagesUsers
 * @property Profile $profile
 * @property State $state
 * @property Type $type
 */
class Agent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['names', 'surnames', 'email', 'username', 'password', 'active', 'type_id', 'state_id', 'sex', 'profile_id'], 'required'],
            [['active', 'type_id', 'state_id', 'profile_id', 'parent'], 'integer'],
            [['lastupdate'], 'safe'],
            [['names', 'avatar'], 'string', 'max' => 100],
            [['surnames', 'email', 'username', 'password', 'authKey', 'accessToken'], 'string', 'max' => 45],
            [['sex'], 'string', 'max' => 1],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profile_id' => 'id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['state_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'names' => Yii::t('app', 'Names'),
            'surnames' => Yii::t('app', 'Surnames'),
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'active' => Yii::t('app', 'Active'),
            'lastupdate' => Yii::t('app', 'Lastupdate'),
            'type_id' => Yii::t('app', 'Type ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'sex' => Yii::t('app', 'Sex'),
            'profile_id' => Yii::t('app', 'Profile ID'),
            'authKey' => Yii::t('app', 'Auth Key'),
            'accessToken' => Yii::t('app', 'Access Token'),
            'parent' => Yii::t('app', 'Parent'),
            'avatar' => Yii::t('app', 'Avatar'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagesUsers()
    {
        return $this->hasMany(ImagesUser::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @inheritdoc
     * @return AgentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AgentQuery(get_called_class());
    }
}
