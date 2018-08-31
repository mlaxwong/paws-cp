<?php
namespace paws\cp\controllers;

use Paws;
use yii\web\Controller;
use paws\records\EntryType;

class EntryTypeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->renderForm(new EntryType);
    }

    public function actionUpdate(int $id)
    {
        return $this->renderForm(EntryType::findOne($id));
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