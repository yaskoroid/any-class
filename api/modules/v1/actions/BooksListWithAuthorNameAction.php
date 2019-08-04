<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.08.19
 * Time: 17:11
 */

namespace api\modules\v1\actions;

use api\modules\v1\models\Book;
use yii\rest\Action;

class BooksListWithAuthorNameAction extends Action
{
    public $modelClass = Book::class;

    public function run()
    {
        return \Yii::$container->get($this->modelClass)::find()->with('author')->asArray()->all();
    }
}