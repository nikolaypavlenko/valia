<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "days".
 *
 * @property integer $id
 * @property integer $karpaty_id
 * @property string $karpaty_name
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
            [['karpaty_id', 'karpaty_name', 'day_number', 'road', 'description', 'img1', 'img2', 'img3'], 'required'],
            [['karpaty_id', 'day_number'], 'integer'],
            [['description'], 'string'],
            [['karpaty_name', 'road', 'img1', 'img2', 'img3'], 'string', 'max' => 255],
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
            'karpaty_name' => 'Karpaty Name',
            'day_number' => 'Day Number',
            'road' => 'Road',
            'description' => 'Description',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
        ];
    }
    
    public static function getItinerary($id) {
        
        $itinerary = Days::find()
                ->where (['karpaty_id' => $id])
                ->orderBy('day_number')
                ->all();
        
        return ($itinerary);
    }
    
    
    
      public function getKarpaty()
    {
        return $this->hasOne(Karpaty::className(), ['id' => 'karpaty_id']);
    }
}
