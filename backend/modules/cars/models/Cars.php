<?php

namespace backend\modules\cars\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property string $car_reg
 * @property string $car_name
 * @property string $car_type
 * @property string $car_model
 * @property int $car_price
 * @property string $registered_at
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     * 
     */
    public $file;

    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_reg', 'car_name', 'car_type', 'car_model', 'car_price', ], 'required'],
            [['car_model'], 'string', ],
            [['car_price'], 'integer'],
            [['registered_at'], 'safe'],
            [['file'], 'file'],
            [['car_reg'], 'string', 'max' => 10],
            [['car_name', 'car_type','logo'], 'string', 'max' => 200],
            [['car_reg'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'car_reg' => 'Car Reg',
            'car_name' => 'Car Name',
            'car_type' => 'Car Type',
            'car_model' => 'Car Model',
            'car_price' => 'Car Price',
            'registered_at' => 'Registered At',
            'file' => 'Car Image'
        ];
    }
}
