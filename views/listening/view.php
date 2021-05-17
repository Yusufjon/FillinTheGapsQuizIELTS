<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\listeningtest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Listeningtests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="listeningtest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Destination',
            'total_visits',
            'best_thing',
            'fav_attraction',
            'destination_dining',
            'method_transport',
            'age_group',
            'income_level',
            'visit_purpose',
            'occupation',
            'accomodation_cost',
        ],
    ]) ?>

</div>
