<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.08.19
 * Time: 15:52
 */

namespace api\modules\v1\controllers;

use api\modules\v1\models;
use yii\rest\ActiveController;
use yii\web\Response;

class AuthorsController extends ActiveController
{
    /** @var Author model */
    public $modelClass = models\Author::class;

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
