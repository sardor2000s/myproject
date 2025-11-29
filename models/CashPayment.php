<?php

namespace app\models;

require_once('Payment.php');

/**
 * Naqd pul orqali to'lov
 * Payment classidan meros oladi
 */
class CashPayment extends Payment
{
    public function process()
    {
        return "Naqd pul orqali {$this->amount} so'm to'landi.";
    }
}
