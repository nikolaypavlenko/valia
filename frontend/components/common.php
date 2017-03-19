<?php

namespace frontend\components;

use yii\base\Component;


class Common extends Component {
    
       
    
    public function sendMail($body,$emailFrom='vialin@ukr.net',$nameFrom='From nogami'){
        if(\Yii::$app->mail->compose()
            ->setFrom(['nogamisami@gmail.com' => 'From nogami.com.ua'])
            ->setTo([$emailFrom => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($body)
            ->send()){
            //$this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }
    
}