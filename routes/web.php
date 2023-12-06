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

use App\Http\Controllers\profileController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/profile', [profileController::class, 'show'])->name('profile');
});

Route::get('/profile/edit', [UserController::class, 'editBio'])->name('editBio');
Route::patch('/profile/updateBio', [UserController::class, 'updateBio'])->name('updateBio');

Route::group(['middleware' => ['web']], function () {
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('updateProfile');
});

use App\Http\Controllers\EventController;

Route::get('/get-schedule', [EventController::class , 'show']);
Route::post('/add-event', [EventController::class, 'store']);
Route::post('/delete-event', [EventController::class, 'delete']);
Route::get('/schedule', [EventController::class, 'index'])->name('schedule');


use App\Http\Controllers\StructureController;

Route::get('/structure', [StructureController::class, 'show'])->name('structure');


Route::get('/get-users/{department_id}', [UserController::class, 'getUsersByDepartment'])->name('get-users');
Route::get('/view-user/{employee_id}', [UserController::class, 'getUserById'])->name('get-user');

use App\Http\Controllers\tndController;
Route::get('/tnd', [tndController::class, 'show'])->name('tnd');

Route::get('/mycourses', [tndController::class, 'showMyCourses'])->name('mycourses');

Route::get('/courses/{courseId}', [tndController::class, 'showCourse'])->name('course.detail');
Route::post('/courses/enroll/{courseId}', [tndController::class, 'enroll'])->name('course.enroll');

use App\Http\Controllers\PostController;

Route::get('/forum', [PostController::class, 'index'])->name('forum');
Route::POST('/add-post', [PostController::class, 'store']);
Route::delete('/delete-post/{post_id}', [PostController::class, 'destroy']);
Route::POST('/update-post', [PostController::class, 'update']);



