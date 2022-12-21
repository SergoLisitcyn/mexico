<?php

use yii\db\Migration;

/**
 * Class m221221_221749_update_table_main_contact
 */
class m221221_221749_update_table_main_contact extends Migration
{
    public function up()
    {
        $this->addColumn('main_contact', 'company_name', $this->string(255)->null());
        $this->addColumn('main_contact', 'bin', $this->string(255)->null());
        $this->addColumn('main_contact', 'ocde', $this->string(255)->null());
        $this->addColumn('main_contact', 'registration_date', $this->string(255)->null());
        $this->addColumn('main_contact', 'certificate', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_contact', 'company_name');
        $this->dropColumn('main_contact', 'bin');
        $this->dropColumn('main_contact', 'ocde');
        $this->dropColumn('main_contact', 'registration_date');
        $this->dropColumn('main_contact', 'certificate');
    }
}
