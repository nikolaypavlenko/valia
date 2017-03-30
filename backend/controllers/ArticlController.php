<?php

namespace backend\controllers;

use Yii;
use backend\models\Articl;
use backend\models\ArticlSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;

/**
 * ArticlController implements the CRUD actions for Articl model.
 */
class ArticlController extends Controller
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
     * Lists all Articl models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticlSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Articl model.
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
     * Creates a new Articl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Articl();
       
        
        $foto = time(); // вводим переменную, которую закодирует мд5 при сохранении
        $row = Yii::$app->request->post();
        //var_dump( $row ) ;
        if ($model->load(Yii::$app->request->post()) ) {
            //echo $model->name . $model->price  . "wtyf"; die();
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if($model->photo){
                    $model->photo->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto) . '.' . $model->photo->extension);
                    $model->photo = '/frontend/web/images/' . md5($foto) . '.' . $model->photo->extension;
            }
            $model->save(false); //что-бы повторно не валидировалось, иначе присваивается $model->image = "i"

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Articl model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = $this->findModel($id); //в случае, если редактируются не все фото, данные перезаписуются 
        $foto = time(); // вводим переменную, которую закодирует мд5 при сохранении

        if ($model->load(Yii::$app->request->post()) ) {
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if($model->photo){
                    $model->photo->saveAs(Yii::getAlias('@frontend/web/images/') . md5($foto) . '.' . $model->photo->extension);
                    $model->photo = '/frontend/web/images/' . md5($foto) . '.' . $model->photo->extension;
            } else {
                $model->photo = $model2->photo; // если фото не загружалось, то перезапишется информация о существующем  фото
            }
            $model->save(false); //что-бы повторно не валидировалось, иначе присваивается $model->image = "i"

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Articl model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Articl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Articl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articl::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
       
     public function actionDeleteimg($img,  $id)
    {
       
        if(file_exists ($_SERVER['DOCUMENT_ROOT'] . $img)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $img); //указываем полный путь к файлу на сервере
        } else {
            throw new NotFoundHttpException('The requested file does not exist.');
        }

                  
        return $this->redirect(['view', 'id' => $id]);

    }
}
