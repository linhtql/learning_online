<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

Route::prefix('/')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('/');
    Route::get('/home', [MainController::class, 'index'])->name('/home');

    Route::get('contact', [MainController::class, 'contact'])->name('contact-us');

    Route::get('course-list', [CourseController::class, 'index'])->name('course-list');
});

Route::get('mycourse', function () {
    return view('home.mycourse');
});




Route::get('course-detail', function () {
    return view('home.course-detail');
});


Auth::routes();
