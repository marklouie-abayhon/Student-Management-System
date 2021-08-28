<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\courseController;
Route::resource('course', '\App\Http\Controllers\courseController');
use App\Http\Controllers\studentController;
Route::resource('student', '\App\Http\Controllers\studentController');


    
use App\Http\Controllers\courseController;

/
use App\Http\Controllers\courseController;
// courseController
Route::get('/course', [courseController::class, 'index']);
Route::put('/store', [courseController::class, 'store']);
Route::post('update/{id}', [courseController::class, 'update']);
Route::delete('delete/{id}', [courseController::class, 'delete']);

use App\Http\Controllers\studentController;
// studentController
Route::get('/student', [studentController::class, 'index']);
Route::put('/store', [studentController::class, 'store']);
Route::post('update/{id}', [studentController::class, 'update']);
Route::delete('delete/{id}', [studentController::class, 'delete']);
*/



use App\Http\Controllers\courseController;
Route::resource('course', '\App\Http\Controllers\courseController');
use App\Http\Controllers\studentController;
Route::resource('student', '\App\Http\Controllers\studentController');
use App\Http\Controllers\homeController;
Route::get('/home', [App\Http\Controllers\homeController::class, 'index']);
use App\Http\Controllers\subjectController;
Route::get('/semester', [App\Http\Controllers\semesterController::class, 'index']);

use App\Http\Controllers\FullCalendarController;
Route::get('full-calendar', [FullCalendarController::class, 'index']);
Route::post('full-calendar/action', [FullCalendarController::class, 'action']);



use App\Http\Controllers\CustomAuthController;
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');