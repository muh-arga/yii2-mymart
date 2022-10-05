<?php

/**
* This template is edited by Muh. Arga Swara Iskandar.
*/

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ItemCategory;

/**
 * ItemCategorySearch represents the model behind the search form of `backend\models\ItemCategory`.
 */
class ItemCategorySearch extends ItemCategory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'main_category'], 'integer'],
            [['category'], 'safe'],
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
        $query = ItemCategory::find();

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
            'main_category' => $this->main_category,
        ]);

        $query->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
