<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03.08.19
 * Time: 17:59
 */

namespace api\modules\v1\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "author".
 *
 * @property int $id Id
 * @property int $name Author Name
 * @property string $surname Author Surname
 * @property string $date_of_birth Author date of birth
 *
 */
class Author extends ActiveRecord
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
            [['author_id'], 'default', 'value' => null],
            [['name'], 'string', 'max' => 50],
            [['surname'], 'string', 'max' => 50],
            [['date_of_birth'], 'safe'],
            [['name', 'surname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'Id',
            'name'          => 'Author Name',
            'surname'       => 'Author Surname',
            'date_of_birth' => 'Author date of birth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }
}