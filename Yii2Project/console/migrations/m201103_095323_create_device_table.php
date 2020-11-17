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
        /*$this->createTable('{{%device}}', [
            'id' => $this->primaryKey(),
        ]);*/
        $this->createTable('device', [
            'serial_number' => $this->string(100)->notNull()->comment('Серийный номер'),
            'store' => $this->string(100)->null()->comment('Название склада'),
            'create_date' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->comment('Дата создания'),
          ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //$this->dropTable('{{%device}}');
        $this->dropTable('device');
    }
}
