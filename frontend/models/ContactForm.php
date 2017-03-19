<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
   // public $subject;
    public $body;
    //public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // email has to be a valid email address
            ['email', 'email', 'message' => 'введите корректный email'],
            // name, email, subject and body are required
            [['name'], 'required', 'message' => 'поле имя не может быть пустым'],
            [[ 'email'], 'required', 'message' => 'поле почта не может быть пустым'],
            [[ 'body'], 'required', 'message' => 'поле сообщение не может быть пустым'],
            
            // verifyCode needs to be entered correctly
           // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'verifyCode' => 'Verification Code',
            'email' => '',
            'name'  => '',
            'body'  => '',
            
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
