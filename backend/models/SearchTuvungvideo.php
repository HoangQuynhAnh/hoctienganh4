<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tuvungvideo;

/**
 * SearchTuvungvideo represents the model behind the search form of `backend\models\Tuvungvideo`.
 */
class SearchTuvungvideo extends Tuvungvideo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idvideo'], 'integer'],
            [['ten', 'loaitu', 'phienam', 'nghia', 'audio'], 'safe'],
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
        $query = Tuvungvideo::find()->where(['idvideo'=>$id]);

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
            'idvideo' => $this->idvideo,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'loaitu', $this->loaitu])
            ->andFilterWhere(['like', 'phienam', $this->phienam])
            ->andFilterWhere(['like', 'nghia', $this->nghia])
            ->andFilterWhere(['like', 'audio', $this->audio]);

        return $dataProvider;
    }
}
