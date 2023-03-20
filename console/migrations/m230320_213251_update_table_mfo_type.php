<?php

use yii\db\Migration;

/**
 * Class m230320_213251_update_table_mfo_type
 */
class m230320_213251_update_table_mfo_type extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'type', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'type');
    }
}
