<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\db\ActiveRecord;

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
 * @property integer $priority
 *
 * @property Accesspropertydetail[] $accesspropertydetails
 * @property ImagesProperty[] $imagesProperties
 * @property Type $type
 */
class Property extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $photos;
    public $map;
    public $path = '/web/uploads/property/';
    public $imageFiles;

    public static function tableName() {
        return 'property';
    }

    public function behaviors() {
        return [            
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['datecreation'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['datelastupdate'],
                ],
                'value' => function() { return date('Y-m-d H:i:s');},
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['type_id', 'state_id', 'money', 'commission', 'longitude', 'latitude', 'address', 'owner', 'phoneowner'], 'required'],
            [['priority', 'type_id', 'state_id', 'active'], 'integer'],
            [['price', 'commission', 'area', 'bedrooms', 'bathrooms'], 'number'],
            [['datecreation', 'datestart', 'datelastupdate'], 'safe'],
            [['money'], 'string', 'max' => 1],
            [['longitude', 'latitude', 'owner'], 'string', 'max' => 50],
            [['phoneowner'], 'string', 'max' => 45],
            [['emailowner', 'address'], 'string', 'max' => 100],
            [['references'], 'string', 'max' => 500],
            [['photos'], 'safe'],
            [['photos'], 'file', 'extensions' => 'jpg, gif, png', 'maxFiles' => 10],
            [['photos'], 'file', 'maxSize' => '2000000'],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_id' => Yii::t('app', 'Tipo ID'),
            'state_id' => Yii::t('app', 'Estado ID'),
            'price' => Yii::t('app', 'Precio'),
            'money' => Yii::t('app', 'Moneda'),
            'commission' => Yii::t('app', 'Comision'),
            'area' => Yii::t('app', 'Area'),
            'bedrooms' => Yii::t('app', 'Cuartos'),
            'bathrooms' => Yii::t('app', 'Baños'),
            'longitude' => Yii::t('app', 'Longitud'),
            'latitude' => Yii::t('app', 'Latitud'),
            'active' => Yii::t('app', 'Activo'),
            'datecreation' => Yii::t('app', 'Dia de creacion'),
            'datestart' => Yii::t('app', 'Dia de inicio'),
            'datelastupdate' => Yii::t('app', 'Dia ultima actualizacion'),
            'owner' => Yii::t('app', 'Propietario'),
            'phoneowner' => Yii::t('app', 'Telefono propietario'),
            'emailowner' => Yii::t('app', 'Correo elec. propietario'),
            'address' => Yii::t('app', 'Direccion'),
            'references' => Yii::t('app', 'Direccion'),
            'photos' => Yii::t('app', 'Fotos'),
            'map' => Yii::t('app', 'Mapa'),
            'priority' => Yii::t('app', 'Prioridad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccesspropertydetails() {
        return $this->hasMany(Accesspropertydetail::className(), ['property_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagesProperties() {
        return $this->hasMany(ImagesProperty::className(), ['property_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType() {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState() {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @inheritdoc
     * @return PropertyQuery the active query used by this AR class.
     */
    public static function find() {
        return new PropertyQuery(get_called_class());
    }

    public function deleteImages() {
        $images = $this->getImagesProperties()->orderBy('order')->all();
        foreach ($images as $image) {
            $path = Yii::$app->basePath . $this->path;
            $filename = $image->name;
            $file = array();
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

    public function getImagesCarousel() {
        $images = $this->getImagesProperties()->orderBy('order')->all();
        if (count($images) > 0) {
            $divContent = "";
            foreach ($images as $image) {
                $img = Html::img("@web/uploads/property/sqr_$image->name", ['class' => 'img-responsive', 'alt' => $image->order]);
                $divContent .= Html::tag('div', $img, ['class' => 'item pull-left']);
            }
            return Html::tag('div', $divContent, ['id' => 'owl-images-property']);
        }
        return Html::tag('div', "No hay imagenes", ['id' => 'owl-images-property', 'class' => 'alert alert-warning']);
    }

}
