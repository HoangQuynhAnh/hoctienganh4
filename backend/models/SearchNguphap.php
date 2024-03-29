<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nguphap;

/**
 * SearchNguphap represents the model behind the search form of `backend\models\Nguphap`.
 */
class SearchNguphap extends Nguphap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idbaihoc'], 'integer'],
            [['noidung'], 'safe'],
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
        $query = Nguphap::find()->where(['idbaihoc'=>$id]);
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
            'idbaihoc' => $this->idbaihoc,
        ]);

        $query->andFilterWhere(['like', 'noidung', $this->noidung]);

        return $dataProvider;
    }
}
