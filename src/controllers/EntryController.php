<?php
namespace paws\cp\controllers;

use yii\web\Controller;
use paws\models\Entry;
use paws\records\EntryType;

class EntryController extends Controller
{
    public function actionIndex()
    {
        $testing = new Entry(['entry_type_id' => 1]);
        $testing->title = 'new one';
        echo $testing->save() ? 'yes' : 'no';

        echo $testing->id;

        // $test = Entry::find()->type(1)->one();
        // echo $test->title;
        // $new = new Entry(['entry_type_id' => 1]);
        // $new->refresh();

        // $reflection = new \ReflectionClass($new);
        // $method = $reflection->getMethod($methodName);
        // $method->setAccessible(true);
        // return $method->invokeArgs($object, $parameters);
        // $property = $reflection->getProperty('_attributes');
        // $property->setAccessible(true);
        // echo '<pre>';print_r($property->getValue($new));
        // echo '<pre>';print_r($new->attributes());
        // $new->entry_type_id = 1;
        // $new->title = 'haha';
        // echo $new->title;
        // echo $new->save() ? 'yes' : 'no';
        // echo '<br />';
        // print_r($new->errors);
        die;

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