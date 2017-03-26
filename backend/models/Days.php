<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "days".
 *
 * @property integer $id
 * @property integer $karpaty_id
 * @property integer $day_number
 * @property string $road
 * @property string $description
 * @property string $img1
 * @property string $img2
 * @property string $img3
 */
class Days extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'days';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'karpaty_id', 'day_number'], 'integer'],
            [['description'], 'string'],
            [['road', 'img1', 'img2', 'img3'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'karpaty_id' => 'Karpaty ID',
            'karpaty_name' => 'Назва маршруту',
            'day_number' => 'Порядковый номер дня (число)',
            'road' => 'маршрут дня',
            'description' => 'Описание',
            'img1' => 'фото1',
            'img2' => 'фото2',
            'img3' => 'фото3',
        ];
    }
    
    public static function exictDay($karpaty_id){
        $day = Days::find()
                ->select(['day_number'])
                ->where(['karpaty_id' => $karpaty_id])
                 ->all();
      
        
        return ($day);
    }
    
    
}
