<?php
return [
    'controllerNamespace' => 'paws\\cp\\controllers',
    'defaultRoute' => 'dashboard',
    'aliases' => [
        '@pawscp' => PATH_BASE . '/src',
    ],
    'basePath' => PATH_BASE,
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
        ],
        'request' => [
            'class' => yii\web\Request::class,
            'cookieValidationKey' => 'HAu3bCrCtjvFceGXIl9ecqDG1_h0FA5X',
        ],
    ],
];