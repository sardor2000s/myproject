<?php
namespace app\models;

// Parent class
class AppUser
{
    public $username;   // tashqi ko'rinadigan
    protected $role;    // faqat parent va child ishlata oladi

    public function __construct($username, $role = 'user')
    {
        $this->username = $username;
        $this->role = $role;
    }

    // Foydalanuvchi haqida umumiy ma'lumot
    public function getUserInfo()
    {
        return "Username: {$this->username}, Role: {$this->role}";
    }
}
