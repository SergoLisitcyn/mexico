<?php

use yii\db\Migration;

/**
 * Class m221206_180458_update_table_reviews_name_email
 */
class m221206_180458_update_table_reviews_name_email extends Migration
{
    public function up()
    {
        $this->addColumn('reviews', 'name', $this->string(255)->null());
        $this->addColumn('reviews', 'email', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('reviews', 'name');
        $this->dropColumn('reviews', 'email');
    }
}
