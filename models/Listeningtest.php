<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "listeningtest".
 *
 * @property int $id
 * @property string $Destination
 * @property string $total_visits
 * @property string $best_thing
 * @property string $fav_attraction
 * @property string $destination_dining
 * @property string $method_transport
 * @property string $age_group
 * @property string $income_level
 * @property string $visit_purpose
 * @property string $occupation
 * @property string $accomodation_cost
 */

/* $Destination = "Melburn";
$total_visits ="Three times";
$best_thing = "Amazing weather";
$fav_attraction = "Town Hall";
$destination_dining = "Variety";
$method_transport = "Plane";
$age_group = "Over forty";
$income_level = "Mid-range";
$visit_purpose = "Tourism";
$occupation = "Computer programmer";
$accomodation_cost = "Good value";*/

class Listeningtest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listeningtest';
    }

    /**
     * {@inheritdoc}
     */





    public function rules()
    {
        return [
            [['Destination', 'total_visits', 'best_thing', 'fav_attraction', 'destination_dining', 'method_transport', 'age_group', 'income_level', 'visit_purpose', 'occupation', 'accomodation_cost'], 'required'],
            [['Destination', 'total_visits', 'best_thing', 'fav_attraction', 'destination_dining', 'method_transport', 'age_group', 'income_level', 'visit_purpose', 'occupation', 'accomodation_cost'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Destination' => 'Destination',
            'total_visits' => 'Total Visits',
            'best_thing' => 'Best Thing',
            'fav_attraction' => 'Fav Attraction',
            'destination_dining' => 'Destination Dining',
            'method_transport' => 'Method Transport',
            'age_group' => 'Age Group',
            'income_level' => 'Income Level',
            'visit_purpose' => 'Visit Purpose',
            'occupation' => 'Occupation',
            'accomodation_cost' => 'Accomodation Cost',
        ];
    }
}
