<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'         => 'app-api',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'modules'    => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class'    => 'api\modules\v1\rest',
        ],
    ],
    'aliases'    => [
        '@api' => dirname(dirname(__DIR__)) . '/api',
    ],
    'components' => [
        'request'    => [
            'enableCookieValidation' => false,
            'enableCsrfValidation'   => false,
            'baseUrl'                => '/api',
            'parsers'                => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'user'       => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-api', 'httpOnly' => true],
        ],
        'user'       => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log'        => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'enableStrictParsing' => true,
            'showScriptName'      => false,
            'rules'               => [
                [
                    'class'         => 'yii\rest\UrlRule',
                    'controller'    => 'v1/books',
                    'pluralize'     => false,
                    'extraPatterns' => [
                        'GET list'    => 'indexWithAuthorName',
                        'GET new'     => 'create',
                        'POST update' => 'update',
                    ],
                ],
                [
                    'class'         => 'yii\rest\UrlRule',
                    'controller'    => 'v1/authors',
                    'pluralize'     => false,
                    'extraPatterns' => [
                        'GET list'    => 'index',
                        'GET new'     => 'create',
                        'POST update' => 'update',
                    ],
                ],
            ],
        ],
    ],
    'params'     => $params,
];



