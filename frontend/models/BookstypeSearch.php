<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Bookstype;

/**
 * BookstypeSearch represents the model behind the search form of `frontend\models\Bookstype`.
 */
class BookstypeSearch extends Bookstype
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtype'], 'integer'],
            [['booktype'], 'safe'],
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
        $query = Bookstype::find();

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
            'idtype' => $this->idtype,
        ]);

        $query->andFilterWhere(['like', 'booktype', $this->booktype]);

        return $dataProvider;
    }
}
