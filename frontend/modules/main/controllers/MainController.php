<?php
namespace frontend\modules\main\controllers;

use frontend\models\ContactForm;
use frontend\components\Common;
use frontend\models\Karpaty;

class MainController extends \yii\web\Controller
{
    
    public $layout = "bootstrap";

    public $success ;

    public function actionIndex()
    {
       
        return $this->render('index');
    }
    
    
     public function actionContact()
    {
        $model = new ContactForm();
        
       
        if($model->load(\Yii::$app->request->post()) && $model->validate() ){
            
            $body = " <div>Text: <b> ".$model->body." </b></div>";
            $body .= " <div>Email: <b> ".$model->email." </b></div>";
            $body .= " <div>name: <b> ".$model->name." </b></div>";
           
            $messege = new Common();
            $send = $messege->sendMail($body);
            
            $model = new ContactForm(); // создаем новую модель, чтобы очистить поля формы после отправки сообщения
            $success = "Спасибо, Ваше сообщение успешно отправлено";
            
        } 
        
        return $this->render('contact', [
            'model' => $model,
            'success' => $success,
            ]);
    }

    
     public function actionKarpaty()
    {
        
        $listKarpaty = Karpaty::getListKarpaty();
        
         
        return $this->render('karpaty', ['listKarpaty' => $listKarpaty]);
    }
    
    
}
