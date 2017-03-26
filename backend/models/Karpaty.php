<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "karpaty".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo

 * @property string $road
 * @property string $duration
 * @property string $status
 * @property integer $price
 * @property integer $description
 */
class Karpaty extends \yii\db\ActiveRecord
{
    
      
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karpaty';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'duration',  'status'], 'required'],
            //[['status'], 'integer'],
            [['price', 'description', 'lenth', 'road', 'complexity'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'назва маршруту',
            'photo' => 'фото',
            'duration' => 'тривалість',
            'status' => 'статус',
            'road' => 'основные точки маршрута &bull;',
            'lenth' => 'кол-во дней похода',
            'price' => 'цена',
            'description' => 'описание маршрута',
            'complexity' => 'сложность маршрута',
        ];
    }
    
    
    public static function getListKarpaty($karpaty_id) {
     
            $karpaty = Karpaty::find()
                ->where(['id' => $karpaty_id])
                ->one();
      
            return ($karpaty);
        
    }
}

