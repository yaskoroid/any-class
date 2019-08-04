<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Author;
use frontend\models\Book;

/**
 * Site controller
 */
class AuthorController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->actionAll();
    }

    public function actionAll()
    {
        $authors = Author::find()->all();
        $error = $authors ? null : 'There is no one author';

        return $this->render(
            'all',
            [
                'authors' => $authors,
                'error'   => $error,
            ]
        );
    }

    public function actionOne()
    {
        $author = array_key_exists('id', Yii::$app->request->get())
            ? Author::find()->where(['id' => Yii::$app->request->get()['id']])->one()
            : null;

        $error = $author ? null : 'There is no author';

        $authorBooks = null;
        if (!$error) {
            $authorBooks = Book::find()->where(['author_id' => $author->id])->all();
        }

        return $this->render(
            'one',
            [
                'author'      => $author,
                'authorBooks' => $authorBooks,
                'error'       => $error,
            ]
        );
    }
}
