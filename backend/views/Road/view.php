<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Road */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Roads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="road-view">

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
            'name',
            'photo1',
            'photo2',
            'photo3',
            'road:ntext',
            'duration',
            'complexity',
            'price',
            'description',
        ],
    ]) ?>

</div>
