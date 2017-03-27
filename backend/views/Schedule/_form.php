<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Karpaty;


/* @var $this yii\web\View */
/* @var $model backend\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'begin')->textInput() ?>

    <?= $form->field($model, 'end')->textInput() ?>

    <?php //$form->field($model, 'karpaty_id')->textInput() ?>
    
     <?php echo $form->field($model, 'karpaty_id')->dropdownList(
            Karpaty::find()->select(['name', 'id'])->indexBy('id')->column(),
            ['prompt'=>'выбор маршрута']
        ) ?>
    

    <?= $form->field($model, 'length')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
