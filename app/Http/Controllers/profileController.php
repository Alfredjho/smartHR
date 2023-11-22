<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class profileController extends Controller
{
    //
    public function show(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }

}
