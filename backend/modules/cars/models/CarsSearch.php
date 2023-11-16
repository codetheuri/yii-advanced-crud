<?php

namespace backend\modules\cars\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\cars\models\Cars;

/**
 * CarsSearch represents the model behind the search form of `backend\modules\cars\models\Cars`.
 */
class CarsSearch extends Cars
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_reg', 'car_name', 'car_type', 'car_model', 'status', 'registered_at'], 'safe'],
            [['car_price'], 'integer'],
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
        $query = Cars::find();

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
            'car_price' => $this->car_price,
            'registered_at' => $this->registered_at,
        ]);

        $query->andFilterWhere(['like', 'car_reg', $this->car_reg])
            ->andFilterWhere(['like', 'car_name', $this->car_name])
            ->andFilterWhere(['like', 'car_type', $this->car_type])
            ->andFilterWhere(['like', 'car_model', $this->car_model])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
