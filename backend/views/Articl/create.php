<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Articl */

$this->title = 'Create Articl';
$this->params['breadcrumbs'][] = ['label' => 'Articls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
