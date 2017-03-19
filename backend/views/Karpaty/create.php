<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Karpaty */

$this->title = 'Create Karpaty';
$this->params['breadcrumbs'][] = ['label' => 'Karpaties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karpaty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

