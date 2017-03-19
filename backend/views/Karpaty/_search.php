<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KarpatySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karpaty-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'photo1') ?>

    <?= $form->field($model, 'photo2') ?>

    <?= $form->field($model, 'photo3') ?>

    <?php // echo $form->field($model, 'road') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'complexity') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
