<?php

use yii\db\Migration;

/**
 * Class m190707_235543_book_column_content_change
 */
class m190707_235543_book_column_content_change extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('book', 'content', $this->text()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('book', 'content', $this->string(50)->notNull());
        echo "m190707_235543_book_column_content_change has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_235543_book_column_content_change cannot be reverted.\n";

        return false;
    }
    */
}
