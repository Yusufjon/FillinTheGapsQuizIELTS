<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\listeningtest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listeningtest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_visits')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'best_thing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fav_attraction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination_dining')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method_transport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_purpose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accomodation_cost')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
