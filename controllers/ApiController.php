<?php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use app\models\MathTeacher;
use app\models\EnglishTeacher;

class ApiController extends Controller
{
    public function actionTeachers()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $math = new MathTeacher();
        $english = new EnglishTeacher();

        return [
            'math_teacher' => $math->teach(),
            'english_teacher' => $english->teach(),
        ];
    }
}
