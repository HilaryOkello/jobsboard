<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "saved".
 *
 * @property int $saved_id
 * @property int $job_id
 * @property int $id
 *
 * @property Jobs $job
 * @property JobSeeker $id0
 */
class Saved extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'saved';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['saved_id', 'job_id', 'id'], 'required'],
            [['saved_id', 'job_id', 'id'], 'integer'],
            [['saved_id'], 'unique'],
            [['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jobs::className(), 'targetAttribute' => ['job_id' => 'job_id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => JobSeeker::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'saved_id' => 'Saved ID',
            'job_id' => 'Job ID',
            'id' => 'ID',
        ];
    }

    /**
     * Gets query for [[Job]].
     *
     * @return \yii\db\ActiveQuery|JobsQuery
     */
    public function getJob()
    {
        return $this->hasOne(Jobs::className(), ['job_id' => 'job_id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|JobSeekerQuery
     */
    public function getId0()
    {
        return $this->hasOne(JobSeeker::className(), ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return SavedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SavedQuery(get_called_class());
    }
}
