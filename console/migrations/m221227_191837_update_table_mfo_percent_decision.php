<?php

use yii\db\Migration;

/**
 * Class m221227_191837_update_table_mfo_percent_decision
 */
class m221227_191837_update_table_mfo_percent_decision extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'percent', $this->float()->null());
        $this->addColumn('mfo', 'decision', $this->float()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'percent');
        $this->dropColumn('mfo', 'decision');
    }
}
