<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "images_user".
 *
 * @property integer $id
 * @property string $name
 * @property integer $order
 * @property integer $active
 * @property integer $user_id
 *
 * @property User $user
 */
class ImagesUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'required'],
            [['id', 'order', 'active', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'order' => Yii::t('app', 'Order'),
            'active' => Yii::t('app', 'Active'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return ImagesUserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImagesUserQuery(get_called_class());
    }
}
