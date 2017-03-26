<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Days */

$this->title = "Создать день по маршруту $name ";
$this->params['breadcrumbs'][] = ['label' => 'Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>уже созданные дни: 
    <?php foreach($existDay as $day) : ?>
        <?php echo $day->day_number . " день, "  ?>
    <?php endforeach ;?>
</p> 
<div class="days-create">

    <h1><?= Html::encode($this->title) ?></h1>
     
    
    
    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id,
        'images' => $images,
        'name' => $name,
    ]) ?>

</div>
