<?php

use yii\db\Migration;

/**
 * Class m190707_173516_author_add_index_date_of_birth
 */
class m190707_173516_author_add_index_date_of_birth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('author_i_date_of_birth_n_u', 'author', 'date_of_birth', false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190707_173516_author_add_index_date_of_birth has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_173516_author_add_index_date_of_birth cannot be reverted.\n";

        return false;
    }
    */
}
