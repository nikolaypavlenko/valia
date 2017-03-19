<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "img".
 *
 * @property integer $id
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property integer $karpaty_id
 */
class Img extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['karpaty_id'], 'required'],
            [['karpaty_id'], 'integer'],
            [['image1', 'image2', 'image3'], 'string', 'max' => 255],
            [['karpaty_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image1' => 'Image1',
            'image2' => 'Image2',
            'image3' => 'Image3',
            'karpaty_id' => 'Karpaty ID',
        ];
    }
    
    public function getKarpaty()
    {
        return $this->hasOne(Karpaty::className(), ['id' => 'karpaty_id']);
    }
    
    
}
