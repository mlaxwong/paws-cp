<?php
namespace paws\cp\controllers;

use yii\web\Controller;
use yii\web\ErrorAction;

class DashboardController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ];
    }

    public function actionIndex()
    {
    }
}