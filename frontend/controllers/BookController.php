<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Book;

/**
 * Site controller
 */
class BookController extends Controller
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

    /**
     * @return string
     */
    public function actionAll()
    {
        $books = Book::find()->all();
        $error = $books ? null : 'There is no one book';

        return $this->render(
            'all',
            [
                'books' => $books,
                'error' => $error,
            ]
        );
    }

    /**
     * @return string
     */
    public function actionOne()
    {
        $book = array_key_exists('id', Yii::$app->request->get())
            ? Book::find()->where(['id' => Yii::$app->request->get()['id']])->one()
            : null;

        $error = $book ? null : 'There is no book';

        return $this->render(
            'one',
            [
                'book'  => $book,
                'error' => $error,
            ]
        );
    }
}
