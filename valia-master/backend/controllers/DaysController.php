<?php

namespace backend\controllers;

use Yii;
use backend\models\Days;
use backend\models\DaysSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;


/**
 * DaysController implements the CRUD actions for Days model.
 */
class DaysController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Days models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DaysSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Days model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        
        $images = Days::find()->where(['id' => $id])->all() ; 

        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'images' => $images,
        ]);
    }

    /**
     * Creates a new Days model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Days();
        
        $id = $_GET['id']; //получение id маршрута, отправленного с бэкенд/карпаты/индекс
        $name = $_GET['name']; //получение названия маршрута, отправленного с бэкенд/карпаты/индекс

       // $images = Img::find()->where(['karpaty_id' => $id])->all(); // выбор всех фото по маршруту 
        $foto1 = time(); // вводим переменную, которую закодирует мд5 при сохранении
        $foto2 = time() + 2; // вводим переменную, которую закодирует мд5 при сохранении
        $foto3 = time() + 3; // вводим переменную, которую закодирует мд5 при сохранении

       
        //сохранение загружаемого файла
        if ($model->load(Yii::$app->request->post()) ) {
                $model->karpaty_id = $id ;
                $model->karpaty_name = $name ;
                $model->img1 = UploadedFile::getInstance($model, 'img1');
                $model->img2 = UploadedFile::getInstance($model, 'img2');
                $model->img3 = UploadedFile::getInstance($model, 'img3');

                if($model->img1){
                    $model->img1->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto1) . '.' . $model->img1->extension);
                    $model->img1 = '/frontend/web/images/' . md5($foto1) . '.' . $model->img1->extension;
                }
                 if($model->img2){
                    $model->img2->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto2) . '.' . $model->img2->extension);
                    $model->img2 = '/frontend/web/images/' . md5($foto2) . '.' . $model->img2->extension;
                }
                 if($model->img3){
                    $model->img3->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto3) . '.' . $model->img3->extension);
                    $model->img3 = '/frontend/web/images/' . md5($foto3) . '.' . $model->img3->extension;
                }
        $model->save(false); //что-бы повторно не валидировалось, иначе присваивается $model->image = "i"
         return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'images' => $images
            ]);
        }

    }

    /**
     * Updates an existing Days model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = $this->findModel($id); //в случае, если редактируются не все фото, данные перезаписуются 
        $images = Days::find()->where(['id' => $id])->all() ; 

        
        $foto1 = time(); // вводим переменную, которую закодирует мд5 при сохранении
        $foto2 = time() + 2; // вводим переменную, которую закодирует мд5 при сохранении
        $foto3 = time() + 3; // вводим переменную, которую закодирует мд5 при сохранении

       
        //сохранение загружаемого файла
        if ($model->load(Yii::$app->request->post()) ) {
                $model->img1 = UploadedFile::getInstance($model, 'img1');
                $model->img2 = UploadedFile::getInstance($model, 'img2');
                $model->img3 = UploadedFile::getInstance($model, 'img3');

                if($model->img1){
                    $model->img1->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto1) . '.' . $model->img1->extension);
                    $model->img1 = '/frontend/web/images/' . md5($foto1) . '.' . $model->img1->extension;
                } else {
                    $model->img1 = $model2->img1 ;// если фото не загружалось, то перезапишется информация о существующем  фото
                }
                 if($model->img2){
                    $model->img2->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto2) . '.' . $model->img2->extension);
                    $model->img2 = '/frontend/web/images/' . md5($foto2) . '.' . $model->img2->extension;
                } else {
                    $model->img2 = $model2->img2; // если фото не загружалось, то перезапишется информация о существующем  фото
                }
                 if($model->img3){
                    $model->img3->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto3) . '.' . $model->img3->extension);
                    $model->img3 = '/frontend/web/images/' . md5($foto3) . '.' . $model->img3->extension;
                }else {
                    $model->img3 = $model2->img3; // если фото не загружалось, то перезапишется информация о существующем  фото
                }
        $model->save(false); //что-бы повторно не валидировалось, иначе присваивается $model->image = "i"
         return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'images' => $images
            ]);
        }
    }

    /**
     * Deletes an existing Days model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    public function actionDeleteimg($img,  $id)
    {
       
        if(file_exists ($_SERVER['DOCUMENT_ROOT'] . $img)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $img); //указываем полный путь к файлу на сервере
        } else {
            throw new NotFoundHttpException('The requested file does not exist.');
        }

                  
        return $this->redirect(['update', 'id' => $id]);

    }
    

    /**
     * Finds the Days model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Days the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Days::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
