<?php

use yii\db\Migration;

/**
 * Class m221226_202606_update_table_mfo_min_term_sum
 */
class m221226_202606_update_table_mfo_min_term_sum extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'min_sum', $this->float()->null());
        $this->addColumn('mfo', 'min_term', $this->float()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'min_sum');
        $this->dropColumn('mfo', 'min_term');
    }
}
