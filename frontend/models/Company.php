<?php

namespace frontend\models;

use common\models\User;
use common\models\UserQuery;

use Yii; 

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $company_name
 * @property string $company_description
 * @property int $industry_id
 * @property string $establishment_date
 * @property string $company_website_url
 * @property string $company_logo
 * @property string $company_banner
 * @property int $location_id
 *
 * @property Location $location
 * @property User $id0
 * @property Jobs[] $jobs
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'company_name', 'company_description', 'industry_id', 'establishment_date', 'company_website_url', 'company_logo', 'company_banner', 'location_id'], 'required'],
            [['id', 'industry_id', 'location_id'], 'integer'],
            [['establishment_date'], 'safe'],
            [['company_name', 'company_website_url'], 'string', 'max' => 100],
            [['company_description'], 'string', 'max' => 512],
            [['company_logo', 'company_banner'], 'string', 'max' => 11],
            [['id'], 'unique'],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
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
            'company_name' => 'Company Name',
            'company_description' => 'Company Description',
            'industry_id' => 'Industry ID',
            'establishment_date' => 'Establishment Date',
            'company_website_url' => 'Company Website Url',
            'company_logo' => 'Company Logo',
            'company_banner' => 'Company Banner',
            'location_id' => 'Location ID',
        ];
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery|LocationQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['location_id' => 'location_id']);
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
     * Gets query for [[Jobs]].
     *
     * @return \yii\db\ActiveQuery|JobsQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CompanyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyQuery(get_called_class());
    }
}
