<?php

use yii\db\Migration;

/**
 * Class m190707_164348_book
 */
class m190707_164348_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id'        => $this->primaryKey(),
            'author_id' => $this->integer(11)->notNull(),
            'title'     => $this->string(120)->notNull(),
            'content'   => $this->string(50)->notNull(),
            'date'      => $this->date('Y-m-d')->notNull(),
        ]);

        $this->addForeignKey(
            'author_id_f_k',
            'book',
            'author_id',
            'author',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
        echo "m190707_164348_book has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_164348_book cannot be reverted.\n";

        return false;
    }
    */
}
