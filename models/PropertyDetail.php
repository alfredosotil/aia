<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property_detail".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $active
 *
 * @property Accesspropertydetail[] $accesspropertydetails
 */
class PropertyDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'active'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['description'], 'string', 'max' => 100],
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
            'description' => Yii::t('app', 'Description'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccesspropertydetails()
    {
        return $this->hasMany(Accesspropertydetail::className(), ['property_detail_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PropertyDetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PropertyDetailQuery(get_called_class());
    }
}
