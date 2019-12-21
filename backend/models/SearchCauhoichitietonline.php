<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cauhoichitietonline;

/**
 * SearchCauhoichitietonline represents the model behind the search form of `backend\models\Cauhoichitietonline`.
 */
class SearchCauhoichitietonline extends Cauhoichitietonline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idcauhoi'], 'integer'],
            [['noidung', 'da_dung', 'da_nhieu1', 'da_nhieu2', 'da_nhieu3'], 'safe'],
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
        $query = Cauhoichitietonline::find()->where(['idcauhoi'=>$id]);
;

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
            'idcauhoi' => $this->idcauhoi,
        ]);

        $query->andFilterWhere(['like', 'noidung', $this->noidung])
            ->andFilterWhere(['like', 'da_dung', $this->da_dung])
            ->andFilterWhere(['like', 'da_nhieu1', $this->da_nhieu1])
            ->andFilterWhere(['like', 'da_nhieu2', $this->da_nhieu2])
            ->andFilterWhere(['like', 'da_nhieu3', $this->da_nhieu3]);

        return $dataProvider;
    }
}
