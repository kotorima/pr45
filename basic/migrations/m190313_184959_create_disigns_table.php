<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%disigns}}`.
 */
class m190313_184959_create_disigns_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%disigns}}', [
            'id' => $this->primaryKey(),
            'worker_id' => $this->string(),
            'work_name' => $this->string(),
            'date_of_creation' => $this->date('y-m-d'),
            'url' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%disigns}}');
    }
}
