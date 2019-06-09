<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%medicine}}`.
 */
class m190609_195040_create_medicine_table extends Migration
{
    private $tableName = '{{%medicine}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'status' => $this->tinyInteger()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
