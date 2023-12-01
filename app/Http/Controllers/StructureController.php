<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class StructureController extends Controller
{
    //
    public function show(){
        $user = Auth::user();
        return view('structure', compact('user'));
    }

}
