<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%device}}`.
 */
class m201103_095323_create_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('device', [
            'id' => $this->smallInteger(8)->notNull()->comment('ID'),
            'serial_number' => $this->string(100)->notNull()->comment('Серийный номер'),
            'store_id' => $this->smallInteger(8)->notNull()->comment('ID склада'),
            'create_date' => $this->datetime()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->comment('Дата создания'),
          ]);
          $this->addPrimaryKey('device_pk', 'device', 'id');
          $this->alterColumn('device', 'id', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('device');
    }
}
