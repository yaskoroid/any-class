<?php

use yii\db\Migration;

/**
 * Class m190707_172317_author_add_column_date_of_birth
 */
class m190707_172317_author_add_column_date_of_birth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('author', 'date_of_birth', $this->date('Y-m-d')->after('surname')
            ->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190707_172317_author_add_column_date_of_birth has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_172317_book_add_index_title_date cannot be reverted.\n";

        return false;
    }
    */
}
