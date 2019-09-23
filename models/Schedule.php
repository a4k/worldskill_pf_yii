<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedules".
 *
 * @property int $schedule_id
 * @property int $ship_id
 * @property string $departure_place
 * @property string $departure_time
 * @property string $arrival_place
 * @property string $arrival_time
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ship_id'], 'integer'],
            [['departure_time', 'arrival_time'], 'safe'],
            [['departure_place', 'arrival_place'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'schedule_id' => 'Schedule ID',
            'ship_id' => 'Ship ID',
            'departure_place' => 'Departure Place',
            'departure_time' => 'Departure Time',
            'arrival_place' => 'Arrival Place',
            'arrival_time' => 'Arrival Time',
        ];
    }
}
