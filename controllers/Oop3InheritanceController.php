<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use Yii;

// Bu controller - bizning API endpointimiz
class Oop3InheritanceController extends Controller
{
    // CSRF tekshirishni o'chiramiz (POST so'rov uchun)
    public $enableCsrfValidation = false;

    // API endpoint: /oop3-inheritance/payment
    public function actionPayment()
    {
        // Natija JSON formatida qaytadi
        Yii::$app->response->format = Response::FORMAT_JSON;

        // POST so'rovdan ma'lumot olish
        $type = Yii::$app->request->post('type');     // 'card' yoki 'cash'
        $amount = Yii::$app->request->post('amount'); // summani olish

        // Model fayllarni ulaymiz
        require_once(__DIR__ . '/../models/Payment.php');
        require_once(__DIR__ . '/../models/CreditCardPayment.php');
        require_once(__DIR__ . '/../models/CashPayment.php');

        // Qaysi to'lov turiga qarab obyekt yaratamiz
        if ($type === 'card') {
            $payment = new \app\models\CreditCardPayment($amount);
        } elseif ($type === 'cash') {
            $payment = new \app\models\CashPayment($amount);
        } else {
            return ["error" => "Noto'g'ri to'lov turi"];
        }

        // Process methodini chaqiramiz va natijani qaytaramiz
        return [
            "message" => $payment->process(),
        ];
    }
}
