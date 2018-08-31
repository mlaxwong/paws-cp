<?php
namespace paws\cp\controllers;

use Paws;
use paws\web\Controller;
use paws\records\Field;

class FieldController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->renderForm(new Field);
    }

    public function actionUpdate(int $id)
    {
        return $this->renderForm(Field::findOne($id));    
    }

    protected function renderForm($model)
    {
        if ($model->load(Paws::$app->request->post()) && $model->save())
        {
            return $this->redirect(['index']);
        }
        return $this->render('form', compact('model'));
    }
}