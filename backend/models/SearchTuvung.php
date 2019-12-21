<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tuvung;

/**
 * SearchTuvung represents the model behind the search form of `backend\models\Tuvung`.
 */
class SearchTuvung extends Tuvung
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['idbaihoc', 'ten', 'audio', 'phienam', 'nghia', 'anh'], 'safe'],
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
    public function search($params,$id)
    {
        $query = Tuvung::find()->where(['idbaihoc'=>$id]);

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

        $query->andFilterWhere(['like', 'idbaihoc', $this->idbaihoc])
            ->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'audio', $this->audio])
            ->andFilterWhere(['like', 'phienam', $this->phienam])
            ->andFilterWhere(['like', 'nghia', $this->nghia])
            ->andFilterWhere(['like', 'anh', $this->anh]);

        return $dataProvider;
    }
}
