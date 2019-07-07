<?php

use yii\db\Migration;

/**
 * Class m190707_173432_book_add_index_title
 */
class m190707_173432_book_add_index_title extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('book_i_title_n_u', 'book', 'title', false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190707_173432_book_add_index_title has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_173432_book_add_index_title cannot be reverted.\n";

        return false;
    }
    */
}
