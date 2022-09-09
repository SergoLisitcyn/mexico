<?php

use yii\db\Migration;

/**
 * Class m220906_120410_update_table_mfo_rating_auto
 */
class m220906_120410_update_table_mfo_rating_auto extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'rating_auto', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'rating_auto');
    }
}
