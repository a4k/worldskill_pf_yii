<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'schedule_id',
//            'ship_id',
            'departure_place',
            'departure_time',
            'arrival_place',
            'arrival_time',

            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function ($model, $key, $index, $column = false) {

                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $model, [

                            'title' => Yii::t('yii', 'View'),

                        ]);

                    },
                    'delete' => function ($model, $key, $index, $column = false) {
                        return '';
                    },
                    'update' => function ($model, $key, $index, $column = false) {
                        return '';
                    },
                ],
            ],
        ],
    ]); ?>


</div>
