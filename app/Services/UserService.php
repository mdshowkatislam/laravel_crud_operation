<?php

namespace App\Services;

use App\Models\User;

/**
 * Class UserService.
 */
class UserService
{
    public static function getAllUser()
    {
        return User::all();
    }
    public static function getUserById($id)
    {
        return User::where('id', $id)->first();
    }
}
