<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Applied]].
 *
 * @see Applied
 */
class AppliedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Applied[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Applied|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
