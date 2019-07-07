<?php

use yii\db\Migration;

/**
 * Class m190707_120011_author
 */
class m190707_120011_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id'      => $this->primaryKey(),
            'name'    => $this->string(50)->notNull(),
            'surname' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
        echo "m190707_120011_author has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_120011_author cannot be reverted.\n";

        return false;
    }
    */
}
