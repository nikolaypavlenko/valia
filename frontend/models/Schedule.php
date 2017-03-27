<?php

namespace frontend\models;

use Yii;
use DateTime;

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
            'month' => 'Month',
            'begin' => 'Begin',
            'end' => 'End',
            'karpaty_id' => 'Karpaty ID',
            'length' => 'Length',
        ];
    }
    
    public static function functionDate($mark) {
     
        $date = DateTime::createFromFormat('Y-m-d', $mark); 
        $dat =  $date->format('d.m');
        
        return ($dat);
    }
    
    public static function functionMounth($mark) {
     
        $date = DateTime::createFromFormat('Y-m-d', $mark); 
        $moun =  $date->format('n');
        
        return ($moun);
    }
    
     public function getKarpaty()
    {
        return $this->hasOne(Karpaty::className(), ['id' => 'karpaty_id']);
    }
}


