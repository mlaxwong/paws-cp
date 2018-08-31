<?php
namespace paws\cp\controllers;

use yii\web\Controller;
use paws\models\Entry;

class EntryController extends Controller
{
    public function actionIndex()
    {
        $test = new Entry(1);
        
        return $this->render('list');
    }

    public function actoinCreate()
    {
        return $this->renderForm();
    }

    public function actionUpdate()
    {
        return $this->renderForm();
    }

    protected function renderForm($model = null)
    {

        return $this->render('form', compact('model'));
    }
}