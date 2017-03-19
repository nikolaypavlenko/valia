<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Img;

/**
 * ImgSearch represents the model behind the search form about `backend\models\Img`.
 */
class ImgSearch extends Img
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'image1', 'image2', 'image3', 'karpaty_id'], 'integer'],
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
        $query = Img::find();

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
            'image1' => $this->image1,
            'image2' => $this->image2,
            'image3' => $this->image3,
            'karpaty_id' => $this->karpaty_id,
        ]);

        return $dataProvider;
    }
}
