<?php
return [
    'controllerNamespace' => 'paws\\cp\\controllers',
    'layout' => 'cp',
    'defaultRoute' => 'dashboard',
    'aliases' => [
        '@pawscp' => PATH_BASE . '/src',
    ],
    'basePath' => PATH_BASE,
    'layoutPath' => '@app/src/views/_layouts',
    'viewPath' => '@app/src/views',
    'components' => [
        'errorHandler' => [
            'class' => yii\web\ErrorHandler::class,
            'errorAction' => 'dashboard/error'
        ],
        'urlManager' => [
            'class' => yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'enableStrictParsing' => false,
            // 'ruleConfig' => ['class' => paws\web\UrlRule::class],
            'rules' => [  
                '<controller:[\w\-]+>/<id:\d+>' => '<controller>/view',
                '<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>' => '<controller>/<action>',
                '<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',               
            ],
        ],
        'view' => [
            'class' => yii\web\View::class,
            'defaultExtension' => 'twig',
            'renderers' => [
                'twig' => [
                    'class' => paws\twig\ViewRenderer::class,
                    'cachePath' => '@runtime/Twig/cache',
                    'lexerOptions' => [],
                    // Array of twig options:
                    'options' => YII_DEBUG ? [
                        'debug' => true,
                        'auto_reload' => true,
                    ] : [],
                    'extensions' => YII_DEBUG ? ['\Twig_Extension_Debug'] : [],
                    'globals' => [
                        'html' => ['class' => yii\helpers\Html::class],
                        'arrayhelper' => ['class' => yii\helpers\ArrayHelper::class],
                    ],
                    'functions' => [
                        't' => 'Paws::t',
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
            ],
        ],
        'request' => [
            'class' => yii\web\Request::class,
            'cookieValidationKey' => 'HAu3bCrCtjvFceGXIl9ecqDG1_h0FA5X',
        ],
    ],
];