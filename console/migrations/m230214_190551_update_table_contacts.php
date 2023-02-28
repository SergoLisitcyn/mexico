<?php

use yii\db\Migration;

/**
 * Class m230214_190551_update_table_contacts
 */
class m230214_190551_update_table_contacts extends Migration
{
    public function up()
    {
        $this->addColumn('contacts', 'status', $this->smallInteger()->notNull()->defaultValue(0));
        $this->addColumn('contacts', 'created_at', $this->integer()->notNull());
        $this->addColumn('contacts', 'updated_at', $this->integer()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('contacts', 'status');
        $this->dropColumn('contacts', 'created_at');
        $this->dropColumn('contacts', 'updated_at');
    }
}
