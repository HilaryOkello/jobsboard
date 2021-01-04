<?php

namespace frontend\models;

use common\models\User;
use common\models\UserQuery;
use Yii;

/**
 * This is the model class for table "job_seeker".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $profile_image
 * @property int $resume
 *
 * @property Applied[] $applieds
 * @property User $id0
 */
class JobSeeker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_seeker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'last_name', 'profile_image', 'resume'], 'required'],
            [['id', 'profile_image', 'resume'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'profile_image' => 'Profile Image',
            'resume' => 'Resume',
        ];
    }

    /**
     * Gets query for [[Applieds]].
     *
     * @return \yii\db\ActiveQuery|AppliedQuery
     */
    public function getApplieds()
    {
        return $this->hasMany(Applied::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return JobSeekerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JobSeekerQuery(get_called_class());
    }
}
