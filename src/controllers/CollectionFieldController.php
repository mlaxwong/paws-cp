<?php
namespace paws\cp\controllers;

use Paws;
use paws\web\Controller;
use paws\base\Field;
use paws\records\CollectionField;

class CollectionFieldController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->renderForm(new CollectionField);
    }

    public function actionUpdate(int $id)
    {
        return $this->renderForm(CollectionField::findOne($id));    
    }

    public function actionFieldSetting()
    {
        return $this->render('fieldSetting');
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