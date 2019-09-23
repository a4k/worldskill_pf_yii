<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ship_id')->textInput() ?>

    <?= $form->field($model, 'departure_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departure_time')->textInput() ?>

    <?= $form->field($model, 'arrival_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrival_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
