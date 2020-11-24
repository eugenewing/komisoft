<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%store}}`.
 */
class m201103_095413_create_store_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('store', [
            'id' => $this->smallInteger(8)->notNull()->comment('ID'),
            'name' => $this->string(100)->notNull()->comment('Название'),
            'create_date' => $this->datetime()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->comment('Дата создания'),
          ]);
          $this->addPrimaryKey('store_pk', 'store', 'id'); //Первичный ключ по двум полям
          $this->alterColumn('store', 'id', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');

          // Добавляем внешний ключ для таблицы device
          $this->addForeignKey(
            'device_fk',  //  имя ключа
            
            'device',     // имя таблицы с которой организуем связь
            'store_id', //  имя поля таблицы с которой организуем связь
            
            'store',     // имя второй таблицы
            'id',   // имя поля из второй таблицы
            
            //'SET NULL',
            'CASCADE'
          );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('store');
    }
}
