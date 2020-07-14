<?php


namespace execut\crudExample\controllers;

use execut\crudExample\CRUDController;
use execut\crudExample\models\Book;
use yii\db\ActiveRecord;
use yii\rest\DeleteAction;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class BooksController extends CRUDController
{
    protected $filesAttributes = [];
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        $modelClass = $this->module->bookModelClass;
        return $modelClass;
    }
}