<?php

use yii\db\Migration;

/**
 * Class m190708_192851_book_add_comments
 */
class m190708_192851_book_add_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addCommentOnColumn('book', 'id', 'Id');
        $this->addCommentOnColumn('book', 'author_id', 'Author');
        $this->addCommentOnColumn('book', 'title', 'Title');
        $this->addCommentOnColumn('book', 'content', 'Content');
        $this->addCommentOnColumn('book', 'date', 'Date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropCommentFromColumn('book', 'id');
        $this->dropCommentFromColumn('book', 'author_id');
        $this->dropCommentFromColumn('book', 'title');
        $this->dropCommentFromColumn('book', 'content');
        $this->dropCommentFromColumn('book', 'date');
        echo "m190708_192851_book_add_comments has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190708_192851_book_add_comments cannot be reverted.\n";

        return false;
    }
    */
}
