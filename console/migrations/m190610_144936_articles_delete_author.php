<?php

use yii\db\Migration;

/**
 * Class m190610_144936_articles_delete_author
 */
class m190610_144936_articles_delete_author extends Migration
{
    public function up()
    {
        $this->dropColumn('articles', 'author_id');
    }

    public function down()
    {
        $this->addColumn('articles', 'author_id', $this->integer());
    }

}
