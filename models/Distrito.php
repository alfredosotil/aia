<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distrito".
 *
 * @property integer $idDist
 * @property string $distrito
 * @property integer $idProv
 */
class Distrito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distrito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDist'], 'required'],
            [['idDist', 'idProv'], 'integer'],
            [['distrito'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDist' => Yii::t('app', 'Id Dist'),
            'distrito' => Yii::t('app', 'Distrito'),
            'idProv' => Yii::t('app', 'Id Prov'),
        ];
    }

    /**
     * @inheritdoc
     * @return DistritoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistritoQuery(get_called_class());
    }
}
