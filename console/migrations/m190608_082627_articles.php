<?php

use yii\db\Migration;

/**
 * Class m190608_082627_articles
 */
class m190608_082627_articles extends Migration
{
    public function safeUp()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'text' => $this->string()->notNull(),
            'date' => $this->date()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('articles');
    }
}
