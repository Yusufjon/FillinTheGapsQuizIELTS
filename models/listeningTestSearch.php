<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\listeningtest;

/**
 * listeningTestSearch represents the model behind the search form of `app\models\listeningtest`.
 */
class listeningTestSearch extends listeningtest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Destination', 'total_visits', 'best_thing', 'fav_attraction', 'destination_dining', 'method_transport', 'age_group', 'income_level', 'visit_purpose', 'occupation', 'accomodation_cost'], 'safe'],
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
        $query = listeningtest::find();

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
        ]);

        $query->andFilterWhere(['like', 'Destination', $this->Destination])
            ->andFilterWhere(['like', 'total_visits', $this->total_visits])
            ->andFilterWhere(['like', 'best_thing', $this->best_thing])
            ->andFilterWhere(['like', 'fav_attraction', $this->fav_attraction])
            ->andFilterWhere(['like', 'destination_dining', $this->destination_dining])
            ->andFilterWhere(['like', 'method_transport', $this->method_transport])
            ->andFilterWhere(['like', 'age_group', $this->age_group])
            ->andFilterWhere(['like', 'income_level', $this->income_level])
            ->andFilterWhere(['like', 'visit_purpose', $this->visit_purpose])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'accomodation_cost', $this->accomodation_cost]);

        return $dataProvider;
    }
}
