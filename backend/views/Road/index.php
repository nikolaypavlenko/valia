<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RoadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="road-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'photo1',
            //'photo2',
            //'photo3',
            // 'road:ntext',
            // 'duration',
            // 'complexity',
            // 'price',
            // 'description',

            ['class' => 'yii\grid\ActionColumn', 
                
            
                //добавление кнопки imaje для загрузки файлов-картинок
             'template' => '{image}&nbsp;&nbsp;',
             'buttons' =>
                 [
                     'image' => function ($url, $model) {
                         // отображение кнопки посредством выбора картинки-шрифта бутстрапа
                         // замена url перехода при нажатии на кнопку imaje
                         // передача id маршрута для дальнейшего сохранения в таблице дни
                         return Html::a('<span class="glyphicon glyphicon-plus"></span>', Url::to(['/days/create', 'id' => $model->id, 'name' => $model->name,]), 
                         [
                             'title' => Yii::t('yii', 'Добавить описание маршрута')
                         ]); }
                 ]    
                
            ],
        ],
    ]); ?>
</div>
