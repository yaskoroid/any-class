<?php

use yii\db\Migration;

/**
 * Class m190708_110529_author_populate
 */
class m190708_110529_author_populate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('author', [
            'name' => 'Charles',
            'surname' => 'Dickens',
            'date_of_birth' => '1812-02-07',
        ]);
        $this->insert('author', [
            'name' => 'Charles',
            'surname' => 'Darwin',
            'date_of_birth' => '1809-02-12',
        ]);
        $this->insert('author', [
            'name' => 'Mark',
            'surname' => 'Twain',
            'date_of_birth' => '1835-11-30',
        ]);
        $this->insert('author', [
            'name' => 'George',
            'surname' => 'Orwell',
            'date_of_birth' => '1903-06-25',
        ]);
        $this->insert('author', [
            'name' => 'William',
            'surname' => 'Shakespeare',
            'date_of_birth' => '1564-04-26',
        ]);
        $this->insert('author', [
            'name' => 'Margaret',
            'surname' => 'Mitchel',
            'date_of_birth' => '1900-11-08',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('author', ['name' => 'Charles', 'surname' => 'Dickens']);
        $this->delete('author', ['name' => 'Charles', 'surname' => 'Darwin']);
        $this->delete('author', ['name' => 'Mark', 'surname' => 'Twain']);
        $this->delete('author', ['name' => 'George', 'surname' => 'Orwell']);
        $this->delete('author', ['name' => 'William', 'surname' => 'Shakespeare']);
        $this->delete('author', ['name' => 'Margaret', 'surname' => 'Mitchel']);

        echo "m190708_110529_author_populate has been reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190708_110529_author_populate cannot be reverted.\n";

        return false;
    }
    */
}
