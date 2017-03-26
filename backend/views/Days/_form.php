<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Days */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="days-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //  $form->field($model, 'id')->textInput() ?>

    <?php // $form->field($model, 'karpaty_id')->textInput() ?>

    <?= $form->field($model, 'day_number')->textInput() ?>

    <?= $form->field($model, 'road')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img1')->fileInput() ?>

    <?= $form->field($model, 'img2')->fileInput() ?>

    <?= $form->field($model, 'img3')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
    
       <?php foreach($images as $img) :?>
        <!-- поскольку фото в трех столбцах БД то через цикл получаем img1, img2, imge 3 -->
            <?php for($k = 1; $k < 4; $k++) :?> 
                <?php $photo = img . $k ?>
                <span style="outline: 2px solid #120">
                    <span style="position: absolute"> <b>  <?= $img->day_number . " день" ?> </b> </span>
                    <img style="width:100px" src='<?=$img->$photo ?>'  >
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['days/deleteimg', 'img' => $img->$photo , 'id' => $img->id ]) ; ?>">
                        <button type="button" class="btn btn-default btn-lg btn-danger"  aria-label="Left Align" >
                             <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button> 
                    </a>
                </span>
            <?php endfor; ?>
        <?php  endforeach ;?>
    
    

</div>
