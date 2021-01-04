<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Company;

/**
 * CompanySearch represents the model behind the search form of `frontend\models\Company`.
 */
class CompanySearch extends Company
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'industry_id', 'location_id'], 'integer'],
            [['company_name', 'company_description', 'establishment_date', 'company_website_url', 'company_logo', 'company_banner'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Company::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'industry_id' => $this->industry_id,
            'establishment_date' => $this->establishment_date,
            'location_id' => $this->location_id,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'company_description', $this->company_description])
            ->andFilterWhere(['like', 'company_website_url', $this->company_website_url])
            ->andFilterWhere(['like', 'company_logo', $this->company_logo])
            ->andFilterWhere(['like', 'company_banner', $this->company_banner]);

        return $dataProvider;
    }
}
