<?php

namespace frontend\models;

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
            [['name', 'photo', 'road', 'duration',  'price', 'description'], 'required'],
            [['road'], 'string'],
            [['price', ], 'integer'],
            [['price', 'description', 'lenth', 'road'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'photo' => 'Photo1',
            'road' => 'Road',
            'duration' => 'Duration',
            'complexity' => 'Complexity',
            'price' => 'Price',
            'description' => 'Description',
        ];
    }
    
    public static function getListKarpaty() {
        
        $karpaty = Karpaty::find()
                ->where (['status' => 1])
                ->all();
        
        return ($karpaty);
    }
    
     public static function getItinerary($id) {
        
        $karpaty = Karpaty::findOne($id);
               
        return ($karpaty);
    }
    
    public function getDays()
    {
        return $this->hasOne(Days::className(), ['karpaty_id' => 'id']);
    }
    
    
}

