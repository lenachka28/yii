<?php

use yii\db\Migration;

/**
 * Class m190614_113413_alter_table_user
 */
class m190614_113413_alter_table_user extends Migration
{
    public function safeUp()
    {
        $this->addColumn('user', 'name', $this->string(30));
        $this->addColumn('user', 'surname', $this->string(30));
        $this->addColumn('user', 'city', $this->string(30));
        $this->addColumn('user', 'age', $this->integer());
    }

    public function safeDown()
    {
        $this->dropColumn('user', 'name');
        $this->dropColumn('user', 'surname');
        $this->dropColumn('user', 'city');
        $this->dropColumn('user', 'age');
    }
}
