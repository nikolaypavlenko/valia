<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property string $month
 * @property string $begin
 * @property string $end
 * @property integer $karpaty_id
 * @property string $length
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['month', 'begin', 'end', 'karpaty_id', 'length'], 'required'],
            [['begin', 'end'], 'safe'],
            [['karpaty_id'], 'integer'],
            [['month'], 'string', 'max' => 15],
            [['length'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'month' => 'Месяц / буквами',
            'begin' => 'начало похода / форма:2017-06-05',
            'end' => 'завершение похода/ формат: 2017-06-05',
            'karpaty_id' => 'маршрут',
            'length' => 'длительность/ формат: 6 дн.',
        ];
    }
}
