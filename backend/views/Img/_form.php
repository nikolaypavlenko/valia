<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UrlManager;

/* @var $this yii\web\View */
/* @var $model backend\models\Img */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="img-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

   <!-- поле image делаем скрытым чтобы ничего не вводить, но надпись поля в представлении осталась -->

    <?= $form->field($model, 'image1')->fileInput() ?>
   
    <?= $form->field($model, 'image2')->fileInput() ?>
   
    <?= $form->field($model, 'image3')->fileInput() ?>
   
   
        <div class="form-group">
               <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ?
                       'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>


    <!-- вывод фото, загруженных ранее -->
   
        <?php foreach($images as $img) :?>
        <!-- поскольку фото в трех столбцах БД то через цикл получаем image1, image2, image 3 -->
            <?php for($k = 1; $k < 4; $k++) :?> 
                <?php $photo = image . $k ?>
                <span style="outline: 2px solid #120">
                    <span> image1 </span> 
                    <img style="width:200px" src='<?=$img->$photo ?>'  >
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['img/deleteimg', 'img' => $img->$photo , 'id' => $img->id ]) ; ?>">
                        <button type="button" class="btn btn-default btn-lg btn-danger"  aria-label="Left Align" >
                             <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button> 
                    </a>
                </span>
            <?php endfor; ?>
        <?php  endforeach ;?>
   

          
</div>
