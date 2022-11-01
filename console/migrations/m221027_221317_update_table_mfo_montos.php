<?php

use yii\db\Migration;

/**
 * Class m221027_221317_update_table_mfo_montos
 */
class m221027_221317_update_table_mfo_montos extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'montos_title', $this->string(255)->null());
        $this->addColumn('mfo', 'montos_text', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'montos_title');
        $this->dropColumn('mfo', 'montos_text');
    }
}
