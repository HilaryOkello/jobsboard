<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[JobSeeker]].
 *
 * @see JobSeeker
 */
class JobSeekerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return JobSeeker[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return JobSeeker|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
