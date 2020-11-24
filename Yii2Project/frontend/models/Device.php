<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "device".
 *
 * @property int $id
 * @property string $serial_number Серийный номер
 * @property int $store_id ID склада
 * @property string $create_date Дата создания
 *
 * @property Store $store
 */
class Device extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'device';
    }

    public static function primaryKey()
    {
      return ['id'];
    }

    public function behaviors()
    {
      return [
        [
            'class' => TimestampBehavior::className(),
            'attributes' => [ActiveRecord::EVENT_BEFORE_INSERT => ['create_date'],],
            'value' => new Expression('NOW()'),
        ],
      ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_number', 'store_id'], 'required'],
            [['store_id'], 'integer'],
            [['create_date'], 'safe'],
            [['serial_number'], 'string', 'max' => 100],
            [['store_id'], 'exist', 'skipOnError' => true, 'targetClass' => Store::className(), 'targetAttribute' => ['store_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'serial_number' => 'Серийный номер',
            'store_id' => 'ID склада',
            'create_date' => 'Дата создания',
        ];
    }

    /**
     * Gets query for [[Store]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::className(), ['id' => 'store_id']);
    }
}
