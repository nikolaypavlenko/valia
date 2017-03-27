<?php

namespace frontend\modules\main\controllers;

use yii\web\Controller;
use frontend\models\Schedule;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $period = array('5' => 'М А Й', '6' => 'И Ю Н Ь', '7' => 'И Ю Л Ь', '8' => 'А В Г У С Т', '9' => 'С Е Н Т Я Б Р Ь') ; 
        
        $this->layout = "bootstrap";
        
        $schedule = Schedule::find()
                ->orderBy('begin')
                ->all();
               
           
       // die;
       // var_dump($schedule); die;
        
          
        
        
        return $this->render('index', compact('schedule', 'period'));
    }
    
    public function actionPath() {
        
        print \Yii::getAlias('@webroot');
        
    }
            
}
