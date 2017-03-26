<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Karpaty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karpaty-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'photo')->fileInput() ?>
        
        <?= $form->field($model, 'duration')->checkboxList(['design' => '3 дня', 'photography' => '6 днів', ]) ?>
    
        <?= $form->field($model, 'status')->checkboxList(['1' => 'публікувати', '0' => 'підготовка', ]) ?>

        <?= $form->field($model, 'road')->textInput(['maxlength' => true]) ?>
    
        <?= $form->field($model, 'lenth')->textInput(['maxlength' => true]) ?>
       
        <?= $form->field($model, 'price')->textInput() ?>
    
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'complexity')->textInput(['maxlength' => true]) ?>

     
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
