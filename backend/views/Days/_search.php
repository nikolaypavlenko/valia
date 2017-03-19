<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DaysSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="days-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'karpaty_id') ?>

    <?= $form->field($model, 'day_number') ?>

    <?= $form->field($model, 'road') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'img1') ?>

    <?php // echo $form->field($model, 'img2') ?>

    <?php // echo $form->field($model, 'img3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
