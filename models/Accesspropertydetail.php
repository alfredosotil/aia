<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accesspropertydetail".
 *
 * @property integer $id
 * @property integer $property_id
 * @property integer $property_detail_id
 * @property integer $active
 *
 * @property Property $property
 * @property PropertyDetail $propertyDetail
 */
class Accesspropertydetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accesspropertydetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['property_id', 'property_detail_id'], 'required'],
            [['property_id', 'property_detail_id', 'active'], 'integer'],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'id']],
            [['property_detail_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyDetail::className(), 'targetAttribute' => ['property_detail_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'property_id' => Yii::t('app', 'Property ID'),
            'property_detail_id' => Yii::t('app', 'Property Detail ID'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['id' => 'property_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyDetail()
    {
        return $this->hasOne(PropertyDetail::className(), ['id' => 'property_detail_id']);
    }

    /**
     * @inheritdoc
     * @return AccesspropertydetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccesspropertydetailQuery(get_called_class());
    }
}
