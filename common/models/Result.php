<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $id
 * @property string $result
 * @property string $postdate
 * @property int $province
 * @property int $date
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['result'], 'string'],
            [['postdate'], 'safe'],
            [['province', 'date'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'result' => 'Result',
            'postdate' => 'Postdate',
            'province' => 'Province',
            'date' => 'Date',
        ];
    }
    function getDatesFromRange($startDate, $endDate)
    {
        $return = array($startDate);
        $start = $startDate;
        $i=1;
        if (strtotime($startDate) < strtotime($endDate))
        {
            while (strtotime($start) < strtotime($endDate))
            {
                $start = date('Y-m-d', strtotime($startDate.'+'.$i.' days'));
                $return[] = $start;
                $i++;
            }
        }
        return $return;
    }
    public function formatMoney($number, $fractional=false) {  
	    if ($fractional) {  
	        $number = sprintf('%.2f', $number);  
	    }  
	    while (true) {  
	        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
	        if ($replaced != $number) {  
	            $number = $replaced;  
	        } else {  
	            break;  
	        }  
	    }  
	    return $number;  
	}
    public function getProvinces()
    {
        return $this->hasOne(Province::className(), ['id' => 'province']);
    }
}
