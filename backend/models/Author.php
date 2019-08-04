<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id Id
 * @property string $name Name
 * @property string $surname Surname
 * @property string $date_of_birth Date of birth
 *
 * @property Book[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'date_of_birth'], 'required'],
            [['date_of_birth'], 'safe'],
            [['name', 'surname'], 'string', 'max' => 50],
            [['name', 'surname'], 'unique', 'targetAttribute' => ['name', 'surname']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'Id',
            'name'          => 'Name',
            'surname'       => 'Surname',
            'date_of_birth' => 'Date of birth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return AuthorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AuthorQuery(get_called_class());
    }
}
