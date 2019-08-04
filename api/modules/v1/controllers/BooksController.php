<?php

namespace api\modules\v1\controllers;

use api\modules\v1\actions\BooksListWithAuthorNameAction;
use api\modules\v1\models;
use yii\rest\ActiveController;
use yii\web\Response;

class BooksController extends ActiveController
{
    /** @var Book model */
    public $modelClass = models\Book::class;

    /**
     * @return array
     */
    public function actions()
    {
        $actions = parent::actions();
        $actions['indexWithAuthorName'] =
            [
                'class'      => BooksListWithAuthorNameAction::class,
                'modelClass' => $this->modelClass,
            ];
        return $actions;
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors'  => [
                'Origin'                           => ['*'],
                'Access-Control-Request-Method'    => ['GET', 'POST', 'PUT', 'OPTIONS'],
                'Access-Control-Request-Headers'   => ['*'],
                'Access-Control-Allow-Credentials' => true,
            ],
        ];
        return $behaviors;
    }
}
