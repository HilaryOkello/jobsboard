<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jobs;

/**
 * JobsSearch represents the model behind the search form of `frontend\models\Jobs`.
 */
class JobsSearch extends Jobs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_id', 'id', 'industry_id', 'location_id', 'min_salary', 'max_salary', 'category_id', 'min_experience', 'max_experience', 'status'], 'integer'],
            [['job_title', 'currency', 'created_at', 'deadline', 'job_description', 'requirements', 'benefits', 'how_to_apply'], 'safe'],
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
        $query = Jobs::find();

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
            'job_id' => $this->job_id,
            'id' => $this->id,
            'industry_id' => $this->industry_id,
            'location_id' => $this->location_id,
            'min_salary' => $this->min_salary,
            'max_salary' => $this->max_salary,
            'created_at' => $this->created_at,
            'deadline' => $this->deadline,
            'category_id' => $this->category_id,
            'min_experience' => $this->min_experience,
            'max_experience' => $this->max_experience,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'job_title', $this->job_title])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'job_description', $this->job_description])
            ->andFilterWhere(['like', 'requirements', $this->requirements])
            ->andFilterWhere(['like', 'benefits', $this->benefits])
            ->andFilterWhere(['like', 'how_to_apply', $this->how_to_apply]);

        return $dataProvider;
    }
}
