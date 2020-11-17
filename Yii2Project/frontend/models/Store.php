<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property string $name
 * @property string $create_date
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store';
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
            [['name'], 'required'],
            [['create_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'create_date' => 'Дата создания',
        ];
    }
}
