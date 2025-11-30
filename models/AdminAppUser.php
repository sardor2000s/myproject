<?php
namespace app\models;

use app\models\AppUser;

// Child class
class AdminAppUser extends AppUser
{
    // Foydalanuvchini o'chirish funksiyasi
    public function deleteUser($usernameToDelete)
    {
        // Bu oddiy misol, haqiqiy DB yo'q
        return "User '{$usernameToDelete}' has been deleted by admin '{$this->username}'!";
    }
}
