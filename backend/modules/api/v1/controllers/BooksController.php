<?php

namespace backend\modules\api\v1\controllers;

class BooksController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
