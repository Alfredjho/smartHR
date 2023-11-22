<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Hash;

class homeController extends Controller
{
    //
    public function show()
    {
        return view('home');
    }

    // Ini controller
    public function login(Request $request)
    {   
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];


        if (Auth::attempt($credentials)) {
            // login berhasil
            // dd('Login berhasil');
            return redirect('/dashboard');
        } else {
            // dd('Login gagal');
            return redirect()->route('home')->with('error', 'Invalid credentials');
        }
    }

}
