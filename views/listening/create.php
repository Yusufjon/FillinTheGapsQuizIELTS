<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\listeningtest */

$this->title = 'Create Listeningtest';
$this->params['breadcrumbs'][] = ['label' => 'Listeningtests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listeningtest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
