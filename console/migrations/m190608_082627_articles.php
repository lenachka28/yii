<?php

use yii\db\Migration;

/**
 * Class m190608_082627_articles
 */
class m190608_082627_articles extends Migration
{

    /*
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m190608_082627_articles cannot be reverted.\n";

        return false;
    }
    */

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('articles', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string(200),
            'text'=>$this->string(),
            'author_id'=>$this->integer(),
            'alias'=>$this->string(200),
            'date'=>$this->date("Y-m-d"),
            'likes'=>$this->integer(),
            'hits'=>$this->integer(),
        ]);

    }

    public function down()
    {
        $this->dropTable('articles');
    }
}
