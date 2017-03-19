<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "img".
 *
 * @property integer $id
 * @property integer $image1
 * @property integer $image2
 * @property integer $image3
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
            [['image1', 'image2', 'image3', 'karpaty_id'], 'safe'],
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
}
