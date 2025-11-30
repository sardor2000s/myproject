<?php

namespace app\models;

/**
 * Payment - asosiy (parent) class
 * Barcha to'lovlar uchun umumiy xususiyatlar va metodlar
 */
class Payment
{
    protected $amount; // To'lov summasi

    public function __construct($amount)
    {
        $this->amount = $amount; // summani saqlaymiz
    }

    public function getAmount()
    {
        return $this->amount;
    }

    // To'lovni qayta ishlash uchun metod
    public function process()
    {
        return "To'lov qayta ishlanmoqda...";
    }
}
