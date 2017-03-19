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
            [['name', 'photo1', 'photo2', 'photo3', 'road', 'duration', 'complexity', 'price', 'description'], 'required'],
            [['road'], 'string'],
            [['price', 'description'], 'integer'],
            [['name', 'photo1', 'photo2', 'photo3', 'duration', 'complexity'], 'string', 'max' => 255],
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
            'photo1' => 'Photo1',
            'photo2' => 'Photo2',
            'photo3' => 'Photo3',
            'road' => 'Road',
            'duration' => 'Duration',
            'complexity' => 'Complexity',
            'price' => 'Price',
            'description' => 'Description',
        ];
    }
    
    public static function getListKarpaty() {
        
        
        $karpaty = Karpaty::find()
                ->orderBy('id')
                ->all();
      
        
        return ($karpaty);

    }
    
    public function getImg()
    {
        return $this->hasOne(Img::className(), ['karpaty_id' => 'id']);
    }
    
    
}

