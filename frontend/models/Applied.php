<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "applied".
 *
 * @property int $applied_id
 * @property int $id
 * @property int $job_id
 * @property string $created_at
 * @property string $cover_letter
 * @property string $resume
 * @property int $status where 1 represents applied, 2 reviewed, 3 declined, 4 accepted
 *
 * @property Jobs $job
 * @property JobSeeker $id0
 */
class Applied extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applied';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'job_id', 'created_at', 'cover_letter', 'resume'], 'required'],
            [['id', 'job_id', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['cover_letter', 'resume'], 'string', 'max' => 50],
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
            'applied_id' => 'Applied ID',
            'id' => 'ID',
            'job_id' => 'Job ID',
            'created_at' => 'Created At',
            'cover_letter' => 'Cover Letter',
            'resume' => 'Resume',
            'status' => 'Status',
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
     * @return AppliedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AppliedQuery(get_called_class());
    }
}
