<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Saved;

/**
 * SavedSearch represents the model behind the search form of `frontend\models\Saved`.
 */
class SavedSearch extends Saved
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['saved_id', 'job_id', 'id'], 'integer'],
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
        $query = Saved::find();

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
            'saved_id' => $this->saved_id,
            'job_id' => $this->job_id,
            'id' => $this->id,
        ]);

        return $dataProvider;
    }
}
