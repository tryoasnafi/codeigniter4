<?php

namespace App\Validation;

use App\Models\UserModel;

class UserRules
{
    public function valid_login(string $str, string $fields, array $data)
    {
        $userModel = new UserModel();
        $user = $userModel->where('email', $data['email'])->first();

        return !$user ? false : password_verify($data['password'], $user['password']);
    }
}
