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
        /*$this->createTable('{{%store}}', [
            'id' => $this->primaryKey(),
        ]);*/
        $this->createTable('store', [
            'name' => $this->string(100)->notNull()->comment('Название'),
            'create_date' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->comment('Дата создания'),
          ]);
          $this->addPrimaryKey('store_pk', 'store', 'name'); //Первичный ключ по двум полям
        
          // Добавляем внешний ключ для таблицы device
          $this->addForeignKey(
            'device_fk',  //  имя ключа
            
            'device',     // имя таблицы с которой организуем связь
            'store', //  имя поля таблицы с которой организуем связь
            
            'store',     // имя второй таблицы
            'name',   // имя поля из второй таблицы
            
            'SET NULL',
            'CASCADE'
          );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //$this->dropTable('{{%store}}');
        $this->dropTable('store');
    }
}
