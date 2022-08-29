<?php

use yii\db\Migration;

/**
 * Class m220829_214747_update_table_block_management_link
 */
class m220829_214747_update_table_block_management_link extends Migration
{
    public function up()
    {
        $this->addColumn('block_management', 'link', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('block_management', 'link');
    }
}
