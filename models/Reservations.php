<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservations2".
 *
 * @property int $id
 * @property int $user_id
 * @property int $schedule_id
 * @property string $fio
 * @property int $place
 * @property string $type_class
 * @property string $create_at
 */
class Reservations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservations2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'schedule_id', 'place'], 'integer'],
            [['type_class', 'create_at'], 'safe'],
            [['fio'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'schedule_id' => 'Schedule ID',
            'fio' => 'Fio',
            'place' => 'Place',
            'type_class' => 'Type Class',
            'create_at' => 'Create At',
        ];
    }
}
