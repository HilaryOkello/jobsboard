<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "industry".
 *
 * @property int $industry_id
 * @property string $industry_name
 *
 * @property Jobs[] $jobs
 */
class Industry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'industry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['industry_name'], 'required'],
            [['industry_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'industry_id' => 'Industry ID',
            'industry_name' => 'Industry Name',
        ];
    }

    /**
     * Gets query for [[Jobs]].
     *
     * @return \yii\db\ActiveQuery|JobsQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['industry_id' => 'industry_id']);
    }

    /**
     * {@inheritdoc}
     * @return IndustryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IndustryQuery(get_called_class());
    }
}
