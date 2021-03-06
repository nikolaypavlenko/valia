<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="img-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Img', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image1',
            'image2',
            'image3',
            'karpaty_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
