<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\assets\AppAsset;
use app\models\Property;

/**
 * PropertySearch represents the model behind the search form about `app\models\Property`.
 */
class PropertySearch extends Property {

    /**
     * @inheritdoc
     */
    public $type;
    public $state;

    public function rules() {
        return [
            [['id', 'type_id', 'state_id', 'active', 'user_id'], 'integer'],
            [['price', 'commission', 'area', 'bedrooms', 'bathrooms', 'priority'], 'number'],
            [['money', 'longitude', 'latitude', 'datecreation', 'datestart', 'datelastupdate', 'owner', 'phoneowner', 'emailowner', 'type', 'state', 'priority', 'user_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Property::find();
        $query->joinWith(['type', 'state']);
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
            'user_id' => $this->user_id,
            'price' => $this->price,
            'commission' => $this->commission,
            'area' => $this->area,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'priority' => $this->priority,
            'active' => $this->active,
            'datecreation' => $this->datecreation,
            'datestart' => $this->datestart,
            'datelastupdate' => $this->datelastupdate,
        ]);

        $query->andFilterWhere(['like', 'money', $this->money])
                ->andFilterWhere(['like', 'longitude', $this->longitude])
                ->andFilterWhere(['like', 'latitude', $this->latitude])
                ->andFilterWhere(['like', 'owner', $this->owner])
                ->andFilterWhere(['like', 'phoneowner', $this->phoneowner])
                ->andFilterWhere(['like', 'emailowner', $this->emailowner])
                ->andFilterWhere(['like', 'type.type', $this->type])
                ->andFilterWhere(['like', 'state.state', $this->state]);

        return $dataProvider;
    }

}
