<?php

namespace App\Http\Controllers;

class Hash
{
    public static function make($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function check($password, $hashedPassword)
    {
        return password_verify($password, $hashedPassword);
    }
}
