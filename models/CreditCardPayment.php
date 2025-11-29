<?php

namespace app\models;

require_once('Payment.php');

/**
 * Kredit karta orqali to'lov
 * Payment classidan meros oladi
 */
class CreditCardPayment extends Payment
{
    public function process()
    {
        return "Kredit karta orqali {$this->amount} so'm to'landi.";
    }
}
