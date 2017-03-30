<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Articl */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Articls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articl-view">

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
            'short:ntext',
            'text:ntext',
            'node:ntext',
            'photo'
        ],
    ]) ?>

     <span style="outline: 2px solid #120">
                    
            <img style="width:100px" src='<?=$model->photo ?>'  >
            <a href="<?php echo Yii::$app->urlManager->createUrl(['articl/deleteimg', 'img' => $model->photo , 'id' => $model->id ]) ; ?>">
                <button type="button" class="btn btn-default btn-lg btn-danger"  aria-label="Left Align" >
                     <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button> 
            </a>
    </span>
</div>
