<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function insertUser()
    {
        $user = new User;
        $user->name = 'Aldi Taher';
        $user->email = 'aldi@gmail.com';
        $user->password = bcrypt('taher');
        $user->save();
    }
}
