<?php

namespace backend\controllers;

use Yii;
use backend\models\Img;
use backend\models\ImgSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;


/**
 * ImgController implements the CRUD actions for Img model.
 */
class ImgController extends Controller
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
     * Lists all Img models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImgSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Img model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Img model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $id = $_GET['id']; //получение id маршрута, отправленного с бэкенд/карпаты/индекс
        $images = Img::find()->where(['karpaty_id' => $id])->all(); // выбор всех фото по маршруту 
        $foto1 = time(); // вводим переменную, которую закодирует мд5 при сохранении
        $foto2 = time() + 2; // вводим переменную, которую закодирует мд5 при сохранении
        $foto3 = time() + 3; // вводим переменную, которую закодирует мд5 при сохранении

        $model = new Img();
        
        //сохранение загружаемого файла
        if ($model->load(Yii::$app->request->post()) ) {
                $model->karpaty_id = $id ;
                $model->image1 = UploadedFile::getInstance($model, 'image1');
                $model->image2 = UploadedFile::getInstance($model, 'image2');
                $model->image3 = UploadedFile::getInstance($model, 'image3');

                if($model->image1){
                    $model->image1->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto1) . '.' . $model->image1->extension);
                    $model->image1 = '/frontend/web/images/' . md5($foto1) . '.' . $model->image1->extension;
                }
                 if($model->image2){
                    $model->image2->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto2) . '.' . $model->image2->extension);
                    $model->image2 = '/frontend/web/images/' . md5($foto2) . '.' . $model->image2->extension;
                }
                 if($model->image3){
                    $model->image3->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto3) . '.' . $model->image3->extension);
                    $model->image3 = '/frontend/web/images/' . md5($foto3) . '.' . $model->image3->extension;
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
     * Updates an existing Img model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
       
       $model = $this->findModel($id);
       $model2 = $this->findModel($id); //в случае, если редактируются не все фото, данные перезаписуются 
       $images = Img::find()->where(['karpaty_id' => $model->karpaty_id])->all() ; 
        
        $foto1 = time(); // вводим переменную, которую закодирует мд5 при сохранении
        $foto2 = time() + 2; // меняем тайм, что бы были разные числа
        $foto3 = time() + 3; 

        //сохранение загружаемого файла
        if ($model->load(Yii::$app->request->post()) ) {
                $model->image1 = UploadedFile::getInstance($model, 'image1');
                $model->image2 = UploadedFile::getInstance($model, 'image2');
                $model->image3 = UploadedFile::getInstance($model, 'image3');

                if($model->image1){
                    $model->image1->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto1) . '.' . $model->image1->extension);
                    $model->image1 = '/frontend/web/images/' . md5($foto1) . '.' . $model->image1->extension;
                } else {
                    $model->image1 = $model2->image1; // если фото не загружалось, то перезапишется информация о существующем  фото
                }
                 if($model->image2){
                    $model->image2->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto2) . '.' . $model->image2->extension);
                    $model->image2 = '/frontend/web/images/' . md5($foto2) . '.' . $model->image2->extension;
                } else {
                    $model->image2 = $model2->image2;
                }
                 if($model->image3){
                    $model->image3->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto3) . '.' . $model->image3->extension);
                    $model->image3 = '/frontend/web/images/' . md5($foto3) . '.' . $model->image3->extension;
                } else {
                    $model->image3 = $model2->image3;
                }
                $model->save(false); //что-бы повторно не валидировалось, иначе присваивается $model->image = "i"
                return $this->redirect(['view', 'id' => $model->id]);
        } else {
                return $this->render('update', [
                    'model' => $model,
                    'images' => $images,
                ]);
        }
      
    }
    
    /**
     * Deletes an existing Img model.
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
     * Finds the Img model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Img the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Img::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
