<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Days */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="days-view">

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
            'karpaty_name',
            'day_number',
            'road',
            'description:ntext',
            'img1',
            'img2',
            'img3',
        ],
    ]) ?>
    
    
    <?php foreach($images as $img) :?> 
        <?php for($k=1; $k<4; $k++) :?>
            <?php $photo = img . $k ?>
                <img style="width:100px" src="<?php echo $img->$photo ?>" alt="фото маршрута"  >
        <?php endfor ;?>
    <?php endforeach ;?>
         

</div>
