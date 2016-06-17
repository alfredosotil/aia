<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Property;

/**
 * PropertySearch represents the model behind the search form about `app\models\Property`.
 */
class PropertySearch extends Property
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'state_id', 'active'], 'integer'],
            [['price', 'commission', 'area', 'bedrooms', 'bathrooms'], 'number'],
            [['money', 'longitude', 'latitude', 'datecreation', 'datestart', 'datelasupdate', 'owner', 'phoneowner', 'emailowner'], 'safe'],
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
        $query = Property::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'type_id' => $this->type_id,
            'state_id' => $this->state_id,
            'price' => $this->price,
            'commission' => $this->commission,
            'area' => $this->area,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'active' => $this->active,
            'datecreation' => $this->datecreation,
            'datestart' => $this->datestart,
            'datelasupdate' => $this->datelasupdate,
        ]);

        $query->andFilterWhere(['like', 'money', $this->money])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'phoneowner', $this->phoneowner])
            ->andFilterWhere(['like', 'emailowner', $this->emailowner]);

        return $dataProvider;
    }
}