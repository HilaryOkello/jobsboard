<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jobs".
 *
 * @property int $job_id
 * @property int $id
 * @property string $job_title
 * @property int $industry_id
 * @property int $location_id
 * @property string $currency
 * @property int $min_salary
 * @property int $max_salary
 * @property string $created_at
 * @property string $deadline
 * @property int $category_id
 * @property int $min_experience
 * @property int $max_experience
 * @property string $job_description
 * @property string $requirements
 * @property string $benefits
 * @property string $how_to_apply
 * @property int $status
 *
 * @property Applied[] $applieds
 * @property Location $location
 * @property Industry $industry
 * @property Currency $currency0
 * @property Category $category
 * @property Company $id0
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'job_title', 'industry_id', 'location_id', 'currency', 'min_salary', 'max_salary', 'created_at', 'deadline', 'category_id', 'min_experience', 'max_experience', 'job_description', 'requirements', 'benefits', 'how_to_apply'], 'required'],
            [['id', 'industry_id', 'location_id', 'min_salary', 'max_salary', 'category_id', 'min_experience', 'max_experience', 'status'], 'integer'],
            [['created_at', 'deadline'], 'safe'],
            [['job_description', 'requirements', 'benefits', 'how_to_apply'], 'string'],
            [['job_title'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 100],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['industry_id'], 'exist', 'skipOnError' => true, 'targetClass' => Industry::className(), 'targetAttribute' => ['industry_id' => 'industry_id']],
            [['currency'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency' => 'country']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'id' => 'ID',
            'job_title' => 'Job Title',
            'industry_id' => 'Industry ID',
            'location_id' => 'Location ID',
            'currency' => 'Currency',
            'min_salary' => 'Min Salary',
            'max_salary' => 'Max Salary',
            'created_at' => 'Created At',
            'deadline' => 'Deadline',
            'category_id' => 'Category ID',
            'min_experience' => 'Min Experience',
            'max_experience' => 'Max Experience',
            'job_description' => 'Job Description',
            'requirements' => 'Requirements',
            'benefits' => 'Benefits',
            'how_to_apply' => 'How To Apply',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Applieds]].
     *
     * @return \yii\db\ActiveQuery|AppliedQuery
     */
    public function getApplieds()
    {
        return $this->hasMany(Applied::className(), ['job_id' => 'job_id']);
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
     * Gets query for [[Industry]].
     *
     * @return \yii\db\ActiveQuery|IndustryQuery
     */
    public function getIndustry()
    {
        return $this->hasOne(Industry::className(), ['industry_id' => 'industry_id']);
    }

    /**
     * Gets query for [[Currency0]].
     *
     * @return \yii\db\ActiveQuery|CurrencyQuery
     */
    public function getCurrency0()
    {
        return $this->hasOne(Currency::className(), ['country' => 'currency']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|CategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|CompanyQuery
     */
    public function getId0()
    {
        return $this->hasOne(Company::className(), ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return JobsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JobsQuery(get_called_class());
    }
}
