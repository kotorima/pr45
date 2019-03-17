<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Disigns;

class DisignsController extends Controller
{
    public function actionDisigns()
    {
        $disigns = Disigns::find()->all();
        return $this->render('disigns', ['disigns'=> $disigns]);
    }

}