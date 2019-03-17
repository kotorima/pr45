<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Worker;

class WorkerController extends Controller
{
    public function actionWorker()
    {
        $workers = Worker::find()->all();
        return $this->render('worker', ['workers'=> $workers]);
    }

}