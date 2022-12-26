<?php

use yii\db\Migration;

/**
 * Class m221226_213930_create_table_faq
 */
class m221226_213930_create_table_faq extends Migration
{
    public function up()
    {
        $this->createTable('faq', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'text' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('faq');
    }
}
