<?php

use yii\db\Migration;

/**
 * Class m230207_200917_table_contacts
 */
class m230207_200917_table_contacts extends Migration
{
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'body' => $this->text()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('contacts');
    }
}
