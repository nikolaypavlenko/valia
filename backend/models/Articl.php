<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "articl".
 *
 * @property integer $id
 * @property string $name
 * @property string $short
 * @property string $text
 * @property string $node
 */
class Articl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'short', 'text'], 'required'],
            [['short', 'text', 'node', 'photo'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'short' => 'вступление',
            'text' => 'текст статьи',
            'node' => 'узелок',
        ];
    }
}
