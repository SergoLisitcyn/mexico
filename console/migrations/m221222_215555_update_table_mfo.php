<?php

use yii\db\Migration;

/**
 * Class m221222_215555_update_table_mfo
 */
class m221222_215555_update_table_mfo extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'sum', $this->float()->null());
        $this->addColumn('mfo', 'term', $this->float()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'sum');
        $this->dropColumn('mfo', 'term');
    }
}
