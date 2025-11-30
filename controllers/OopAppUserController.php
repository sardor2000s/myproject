<?php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use Yii;

// AdminUser API endpoint
class OopAppUserController extends Controller
{
    public $enableCsrfValidation = false; // POST test uchun

    public function actionAddExample()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        // POST orqali ma'lumotlarni olish
        $username = Yii::$app->request->post('username', 'guest');
        $role     = Yii::$app->request->post('role', 'user');

        // AdminUser obyekt yaratish
        $admin = new \app\models\AdminAppUser($username, $role);

        // Foydalanuvchini o'chirish funksiyasi
        $deleteMessage = $admin->deleteUser("testuser");

        // JSON javob
        return [
            "status"   => "success",
            "admin"    => $admin->getUserInfo(),
            "delete"   => $deleteMessage
        ];
    }
}
