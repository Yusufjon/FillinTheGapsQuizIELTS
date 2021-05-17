<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\listeningTestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listeningtest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Destination') ?>

    <?= $form->field($model, 'total_visits') ?>

    <?= $form->field($model, 'best_thing') ?>

    <?= $form->field($model, 'fav_attraction') ?>

    <?php // echo $form->field($model, 'destination_dining') ?>

    <?php // echo $form->field($model, 'method_transport') ?>

    <?php // echo $form->field($model, 'age_group') ?>

    <?php // echo $form->field($model, 'income_level') ?>

    <?php // echo $form->field($model, 'visit_purpose') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'accomodation_cost') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
