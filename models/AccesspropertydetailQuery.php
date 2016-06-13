<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Accesspropertydetail]].
 *
 * @see Accesspropertydetail
 */
class AccesspropertydetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Accesspropertydetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Accesspropertydetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
