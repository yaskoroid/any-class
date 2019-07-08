<?php

use yii\db\Migration;

/**
 * Class m190707_173456_author_add_index_name
 */
class m190707_173456_author_add_index_name extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('author_i_name_n_u', 'author', 'name', false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('author_i_name_n_u', 'author');
        echo "m190707_173456_author_add_index_name has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_173456_author_add_index_name cannot be reverted.\n";

        return false;
    }
    */
}
