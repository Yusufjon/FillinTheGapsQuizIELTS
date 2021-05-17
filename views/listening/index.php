<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\listeningTestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listeningtests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listeningtest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Listeningtest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Destination',
            'total_visits',
            'best_thing',
            'fav_attraction',
            //'destination_dining',
            //'method_transport',
            //'age_group',
            //'income_level',
            //'visit_purpose',
            //'occupation',
            //'accomodation_cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
