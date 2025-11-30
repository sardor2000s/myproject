<?php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use Yii;

class Oop3InheritanceSevaraController extends Controller
{
    public $enableCsrfValidation = false; // Postman yoki curl testida kerak

    // Bitta endpoint: actionAddExample
    public function actionAddExample()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        // POST ma'lumotlarni olish (default qiymatlar bilan)
        $title   = Yii::$app->request->post('title', 'No title');
        $teacher = Yii::$app->request->post('teacher', 'No teacher');
        $video   = Yii::$app->request->post('video', null);

        // OnlineCourseSevara klassidan obyekt yaratish
        $onlineCourse = new \app\models\OnlineCourseSevara($title, $teacher, $video);

        // JSON shaklida javob
        return [
            "status"      => "success",
            "course_info" => $onlineCourse->getInfo(),
            "video_info"  => $onlineCourse->showVideo(),
            "title"       => $onlineCourse->getTitle(),
            "teacher"     => $onlineCourse->teacher,
            "duration"    => $onlineCourse->getDurationHours()
        ];
    }
}
