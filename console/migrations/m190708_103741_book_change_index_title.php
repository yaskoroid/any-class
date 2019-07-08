<?php

use yii\db\Migration;

/**
 * Class m190708_103741_book_change_index_title
 */
class m190708_103741_book_change_index_title extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropIndex('book_i_title_n_u', 'book');
        $this->createIndex('book_i_title_n_u', 'book', 'title', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('book_i_title_n_u', 'book');
        echo "m190708_103741_book_change_index_title has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190708_103741_book_change_index_title cannot be reverted.\n";

        return false;
    }
    */
}
