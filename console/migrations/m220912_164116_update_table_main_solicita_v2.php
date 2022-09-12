<?php

use yii\db\Migration;

/**
 * Class m220912_164116_update_table_main_solicita_v2
 */
class m220912_164116_update_table_main_solicita_v2 extends Migration
{
    public function up()
    {
        $this->addColumn('main_solicita', 'title_h1', $this->string(255)->null());
        $this->addColumn('main_solicita', 'title_seo', $this->string(255)->null());
        $this->addColumn('main_solicita', 'description', $this->string(255)->null());
        $this->addColumn('main_solicita', 'keywords', $this->string(255)->null());
        $this->addColumn('main_solicita', 'text_top', $this->text());
        $this->addColumn('main_solicita', 'text_bottom', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_solicita', 'title_h1');
        $this->dropColumn('main_solicita', 'title_seo');
        $this->dropColumn('main_solicita', 'description');
        $this->dropColumn('main_solicita', 'keywords');
        $this->dropColumn('main_solicita', 'text_bottom');
        $this->dropColumn('main_solicita', 'text_top');
    }
}
