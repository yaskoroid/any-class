<?php

use yii\db\Migration;

/**
 * Class m190708_192840_author_add_comments
 */
class m190708_192840_author_add_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addCommentOnColumn('author', 'id', 'Id');
        $this->addCommentOnColumn('author', 'name', 'Name');
        $this->addCommentOnColumn('author', 'surname', 'Surname');
        $this->addCommentOnColumn('author', 'date_of_birth', 'Date of birth');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropCommentFromColumn('author', 'id');
        $this->dropCommentFromColumn('author', 'name');
        $this->dropCommentFromColumn('author', 'surname');
        $this->dropCommentFromColumn('author', 'date_of_birth');
        echo "m190708_192840_author_add_comments has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190708_192840_author_add_comments cannot be reverted.\n";

        return false;
    }
    */
}
