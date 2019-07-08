<?php

use yii\db\Migration;

/**
 * Class m190708_102812_author_add_index_name_surname
 */
class m190708_102812_author_add_index_name_surname extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('author_i_name_surname_u', 'author', ['name', 'surname'], true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('author_i_name_surname_u', 'author');
        echo "m190708_102812_author_add_index_name_surname has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190708_102812_author_add_index_name_surname cannot be reverted.\n";

        return false;
    }
    */
}
