<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DaysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Days';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="days-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'karpaty_name',
            'day_number',
            'road',
            'description:ntext',
            // 'img1',
            // 'img2',
            // 'img3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
