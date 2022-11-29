<?php

use yii\db\Migration;

/**
 * Class m221129_164250_create_table_seo_codes
 */
class m221129_164250_create_table_seo_codes extends Migration
{
    public function up()
    {
        $this->createTable('seo_codes', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'seo_codes_top' => $this->text(),
            'seo_codes_top_status' => $this->integer(1)->defaultValue(1),
            'seo_codes_bottom' => $this->text(),
            'seo_codes_bottom_status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('seo_codes');
    }
}
