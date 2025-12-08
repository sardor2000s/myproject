<?php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use app\models\MathTeacher;
use app\models\EnglishTeacher;
use app\models\UniversityStudent;
use app\models\SchoolStudent;

class ApiController extends Controller
{
    // Teacherlar uchun API
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

    // Studentlar uchun API
    public function actionStudents()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $university = new UniversityStudent();
        $school = new SchoolStudent();

        return [
            'university_student' => $university->study(),
            'school_student' => $school->study(),
        ];
    }
}
