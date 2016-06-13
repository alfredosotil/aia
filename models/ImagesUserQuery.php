<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImagesUser]].
 *
 * @see ImagesUser
 */
class ImagesUserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ImagesUser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ImagesUser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
