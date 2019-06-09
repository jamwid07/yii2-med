<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%medicine_has_components}}`.
 */
class m190609_195121_create_medicine_has_components_table extends Migration
{
    private $tableName = '{{%medicine_has_components}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'medicine_id' => $this->integer()->notNull(),
            'component_id' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-medicine_has_components', $this->tableName, ['medicine_id', 'component_id']);

        $this->addForeignKey(
            'fk-medicine_has_components-medicine-id',
            $this->tableName,
            'medicine_id',
            '{{%medicine}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-medicine_has_components-component-id',
            $this->tableName,
            'component_id',
            '{{%component}}',
            'id',
            'RESTRICT',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%medicine_has_components}}');
    }
}
