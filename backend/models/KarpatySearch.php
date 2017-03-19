<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Karpaty;

/**
 * KarpatySearch represents the model behind the search form about `backend\models\Karpaty`.
 */
class KarpatySearch extends Karpaty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'description'], 'integer'],
            [['name', 'photo1', 'photo2', 'photo3', 'road', 'duration', 'complexity'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Karpaty::find();

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
            'price' => $this->price,
            'description' => $this->description,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'photo1', $this->photo1])
            ->andFilterWhere(['like', 'photo2', $this->photo2])
            ->andFilterWhere(['like', 'photo3', $this->photo3])
            ->andFilterWhere(['like', 'road', $this->road])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'complexity', $this->complexity]);

        return $dataProvider;
    }
}
