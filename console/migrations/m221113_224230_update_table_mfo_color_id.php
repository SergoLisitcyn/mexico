<?php

use yii\db\Migration;

/**
 * Class m221113_224230_update_table_mfo_color_id
 */
class m221113_224230_update_table_mfo_color_id extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'color_id', $this->integer(11)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'color_id');
    }
}
