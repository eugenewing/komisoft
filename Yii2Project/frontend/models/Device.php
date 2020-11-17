<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property int $serial_number
 * @property string|null $store
 * @property string $create_date
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function primaryKey()
    {
      return ['serial_number'];
    }

    public static function tableName()
    {
        return 'device';
    }

    /*public function behaviors()
    {
      return [
        [
          'class' => TimestampBehavior::className(),
          'attributes' => [
            ActiveRecord::EVENT_BEFORE_INSERT => ['create_date'],
          ],
           'value' => new Expression('NOW()'),
        ],
      ];
    }*/    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_number'], 'required'],
            [['serial_number'], 'integer'],
            [['create_date'], 'safe'],
            [['store'], 'string', 'max' => 255],
            [['serial_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'serial_number' => 'Серийный номер',
            'store' => 'Склад (название)',
            'create_date' => 'Дата создания',
        ];
    }
}
