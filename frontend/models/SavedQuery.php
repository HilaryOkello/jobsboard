<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Saved]].
 *
 * @see Saved
 */
class SavedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Saved[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Saved|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
