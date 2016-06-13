<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImagesProperty]].
 *
 * @see ImagesProperty
 */
class ImagesPropertyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ImagesProperty[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ImagesProperty|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
