<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PropertyDetail]].
 *
 * @see PropertyDetail
 */
class PropertyDetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PropertyDetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PropertyDetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
