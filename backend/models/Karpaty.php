<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "karpaty".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $road
 * @property string $duration
 * @property string $complexity
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
            //[['name', 'photo', 'duration', ], 'string', 'max' => 255],
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
        ];
    }
    
    
    public static function getListKarpaty($karpaty_id) {
     
          $karpaty = Karpaty::find()
                ->where(['id' => $karpaty_id])
                 ->one();
      
        
        return ($karpaty);
        
    }
}

