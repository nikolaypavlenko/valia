<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KarpatySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karpaties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karpaty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Karpaty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'photo1',
            'photo2',
            'photo3',
            // 'road:ntext',
            // 'duration',
            // 'complexity',
            // 'price',
            // 'description',

            ['class' => 'yii\grid\ActionColumn',
                
                
                //добавление кнопки imaje для загрузки файлов-картинок
             'template' => '{view}&nbsp;&nbsp;{update}&nbsp;&nbsp;{image}&nbsp;&nbsp;{delete}',
             'buttons' =>
                 [
                     'image' => function ($url, $model) {
                         // отображение кнопки посредством выбора картинки-шрифта бутстрапа
                         // замена url перехода при нажатии на кнопку imaje
                         // передача id товара для дальнейшего сохранения в таблице продукты
                         return Html::a('<span class="glyphicon glyphicon-picture"></span>', Url::to(['/img/create', 'id' => $model->id]), 
                         [
                             'title' => Yii::t('yii', 'Загрузить фото')
                         ]); }
                 ]
                
             
                
                
             ],
            
            // upload photo
            
            
        ],
    ]); ?>
    
    
    
    
</div>
