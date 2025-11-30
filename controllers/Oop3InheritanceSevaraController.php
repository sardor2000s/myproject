<?php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use Yii;

// Bu controller Sevara uchun maxsus yaratilgan
// Ichida faqat bitta endpoint: actionAddExample
class Oop3InheritanceSevaraController extends Controller
{
    public $enableCsrfValidation = false; // Postman testlar uchun

    public function actionAddExample()
    {
        // JSON formatda natija qaytadi
        Yii::$app->response->format = Response::FORMAT_JSON;

        // POST orqali kelgan ma'lumotlar
        $title   = Yii::$app->request->post('title', 'No title');
        $teacher = Yii::$app->request->post('teacher', 'No teacher');
        $video   = Yii::$app->request->post('video', null);

        // MODEL (class)larni chaqiramiz — Sevaraga tegishli versiya
        $onlineCourse = new \app\models\OnlineCourseSevara($title, $teacher, $video);

        // Obyektdagi metodlar orqali javob beramiz
        return [
            "status"       => "success",
            "course_info"  => $onlineCourse->getInfo(),     // Parent metodi
            "video_info"   => $onlineCourse->showVideo(),   // Child metodi
            "title"        => $onlineCourse->getTitle(),    // Parent getter
            "teacher"      => $onlineCourse->teacher,       // Public property
            "durationInfo" => $onlineCourse->getDurationHours()
        ];
    }
}
