<?php

use yii\db\Migration;

/**
 * Class m190707_173438_book_add_index_date
 */
class m190707_173438_book_add_index_date extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('book_i_date_n_u', 'book', 'date', false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('book_i_date_n_u', 'book');
        echo "m190707_173438_book_add_index_date has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_173438_book_add_index_date cannot be reverted.\n";

        return false;
    }
    */
}
