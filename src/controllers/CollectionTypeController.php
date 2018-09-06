<?php
namespace paws\cp\controllers;

use Paws;
use yii\web\Controller;
use paws\records\CollectionType;

class CollectionTypeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->renderForm(new CollectionType);
    }

    public function actionUpdate(int $id)
    {
        return $this->renderForm(CollectionType::findOne($id));
    }

    protected function renderForm($model)
    {
        if ($model->load(Paws::$app->request->post()) && $model->save())
        {
            return $this->redirect(['update', 'id' => $model->id]);
        }
        return $this->render('form', compact('model'));
    }
}