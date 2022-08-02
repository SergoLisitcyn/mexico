<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Reviews;

/**
 * ReviewsSearch represents the model behind the search form of `common\models\Reviews`.
 */
class ReviewsSearch extends Reviews
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'costs', 'conditions', 'support', 'functionality', 'recommendation', 'status', 'sort', 'created_at', 'updated_at'], 'integer'],
            [['mfo_id', 'body', 'plus', 'minus'], 'safe'],
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
        $query = Reviews::find();

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
            'costs' => $this->costs,
            'conditions' => $this->conditions,
            'support' => $this->support,
            'functionality' => $this->functionality,
            'recommendation' => $this->recommendation,
            'status' => $this->status,
            'sort' => $this->sort,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'mfo_id', $this->mfo_id])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'plus', $this->plus])
            ->andFilterWhere(['like', 'minus', $this->minus]);

        return $dataProvider;
    }
}
