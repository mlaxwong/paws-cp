<?php
namespace paws\cp\controllers;

use Paws;
use yii\web\Controller;
use paws\models\Collection;
use paws\records\CollectionType;

class CollectionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate($typeId = null)
    {
        $model = new Collection(compact('typeId'));
        return $this->renderForm($model);
    }

    public function actionUpdate(int $id)
    {
        return $this->renderForm(Collection::findOne($id));
    }

    protected function renderForm($model = null)
    {
        if ($model->load(Paws::$app->request->post()) && $model->save())
        {
            return $this->redirect(['update', 'id' => $model->id]);
        }
        return $this->render('form', compact('model'));
    }
}