<?php

use yii\db\Migration;

/**
 * Class m190707_173505_author_add_index_surname
 */
class m190707_173505_author_add_index_surname extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('author_i_surname_n_u', 'author', 'surname', false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190707_173505_author_add_index_surname has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_173505_author_add_index_surname cannot be reverted.\n";

        return false;
    }
    */
}
