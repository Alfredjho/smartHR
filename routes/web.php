<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function() {
//     return view('home');
// });

use App\Http\Controllers\homeController;

Route::get('/home', [homeController::class, 'show'])->name('home');
Route::post('/login', [homeController::class, 'login'])->name('login.post');



use App\Http\Controllers\DashboardController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
});

use App\Http\Controllers\UserController;
Route::get('/insert', [UserController::class, 'insertUser']);


