<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property string $country
 * @property string|null $currency
 * @property string|null $code
 * @property string|null $symbol
 *
 * @property Jobs[] $jobs
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country'], 'required'],
            [['country', 'currency', 'code', 'symbol'], 'string', 'max' => 100],
            [['country'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'currency' => 'Currency',
            'code' => 'Code',
            'symbol' => 'Symbol',
        ];
    }

    /**
     * Gets query for [[Jobs]].
     *
     * @return \yii\db\ActiveQuery|JobsQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['currency' => 'country']);
    }

    /**
     * {@inheritdoc}
     * @return CurrencyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CurrencyQuery(get_called_class());
    }
}
