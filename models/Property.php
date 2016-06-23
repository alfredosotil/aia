<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property integer $id
 * @property integer $type_id
 * @property integer $state_id
 * @property double $price
 * @property string $money
 * @property double $commission
 * @property double $area
 * @property double $bedrooms
 * @property double $bathrooms
 * @property string $longitude
 * @property string $latitude
 * @property integer $active
 * @property string $datecreation
 * @property string $datestart
 * @property string $datelastupdate
 * @property string $owner
 * @property string $phoneowner
 * @property string $emailowner
 * @property string $address
 *
 * @property Accesspropertydetail[] $accesspropertydetails
 * @property ImagesProperty[] $imagesProperties
 * @property Type $type
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $photos;
    
    public static function tableName()
    {
        return 'property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'state_id', 'money', 'commission', 'longitude', 'latitude', 'address'], 'required'],
            [['type_id', 'state_id', 'active'], 'integer'],
            [['price', 'commission', 'area', 'bedrooms', 'bathrooms'], 'number'],
            [['datecreation', 'datestart', 'datelastupdate'], 'safe'],
            [['money'], 'string', 'max' => 1],
            [['longitude', 'latitude', 'owner'], 'string', 'max' => 50],
            [['phoneowner'], 'string', 'max' => 45],
            [['emailowner', 'address'], 'string', 'max' => 100],
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
            'type_id' => Yii::t('app', 'Type ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'price' => Yii::t('app', 'Price'),
            'money' => Yii::t('app', 'Money'),
            'commission' => Yii::t('app', 'Commission'),
            'area' => Yii::t('app', 'Area'),
            'bedrooms' => Yii::t('app', 'Bedrooms'),
            'bathrooms' => Yii::t('app', 'Bathrooms'),
            'longitude' => Yii::t('app', 'Longitude'),
            'latitude' => Yii::t('app', 'Latitude'),
            'active' => Yii::t('app', 'Active'),
            'datecreation' => Yii::t('app', 'Datecreation'),
            'datestart' => Yii::t('app', 'Datestart'),
            'datelastupdate' => Yii::t('app', 'Datelastupdate'),
            'owner' => Yii::t('app', 'Owner'),
            'phoneowner' => Yii::t('app', 'Phoneowner'),
            'emailowner' => Yii::t('app', 'Emailowner'),
            'address' => Yii::t('app', 'Address'),
            'photos' => Yii::t('app', 'Fotos'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccesspropertydetails()
    {
        return $this->hasMany(Accesspropertydetail::className(), ['property_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagesProperties()
    {
        return $this->hasMany(ImagesProperty::className(), ['property_id' => 'id']);
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
     * @return PropertyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PropertyQuery(get_called_class());
    }
}
