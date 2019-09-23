<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Reservations;

class ReservationsController extends Controller {

    public function actionIndex() {

        $model = Reservations::find()->all();

        return $this->render('index', ['model' => $model]);
    }

}