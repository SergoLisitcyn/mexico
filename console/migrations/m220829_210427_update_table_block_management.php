<?php

use yii\db\Migration;

/**
 * Class m220829_210427_update_table_block_management
 */
class m220829_210427_update_table_block_management extends Migration
{
    public function up()
    {
        $this->addColumn('block_management', 'sort', $this->integer(11)->defaultValue(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('block_management', 'sort');
    }
}
