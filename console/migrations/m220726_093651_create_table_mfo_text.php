<?php

use yii\db\Migration;

/**
 * Class m220726_093651_create_table_mfo_text
 */
class m220726_093651_create_table_mfo_text extends Migration
{
    public function up()
    {
        $this->createTable('mfo_text', [
            'id' => $this->primaryKey(),
            'text_mfo' => $this->json()->null(),
            'name' => $this->string(255)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('mfo_text');
    }
}
