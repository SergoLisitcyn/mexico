<?php

use yii\db\Migration;

/**
 * Class m221114_222241_create_table_review_information
 */
class m221114_222241_create_table_review_information extends Migration
{
    public function up()
    {
        $this->createTable('review_information', [
            'id' => $this->primaryKey(),
            'url' => $this->string()->notNull(),
            'content' => $this->text(),
            'title' => $this->string()->defaultValue(null),
            'title_seo' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'keywords' => $this->string()->defaultValue(null),
        ]);
    }

    public function down()
    {
        $this->dropTable('review_information');
    }
}
