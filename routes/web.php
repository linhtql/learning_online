<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('course-detail', function () {
    return view('home.course-detail');
});


Auth::routes();

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

# Admin and family
Route::middleware(['auth', 'admin'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('home', [AdminController::class, 'index'])->name('admin-home');
        
        # Category
        Route::prefix('categories')->group(function(){
            Route::post('add', [CategoryController::class, 'store']);
            Route::get('add', [CategoryController::class, 'create'])->name('add-category');
            Route::get('list', [CategoryController::class, 'index'])->name('show-category');
            Route::DELETE('destroy', [CategoryController::class, 'destroy']);
            Route::get('edit/{category}', [CategoryController::class, 'show']);
            Route::post('edit/{category}', [CategoryController::class, 'update']);
        });
        
        # Course
        Route::prefix('courses')->group(function(){
            Route::get('add', [CourseController::class, 'create'])->name('add-course');
            Route::post('add', [CourseController::class, 'store']);
            Route::get('list', [CourseController::class, 'show'])->name('show-course');
            Route::get('edit/{course}', [CourseController::class, 'edit']);
            Route::post('edit/{course}', [CourseController::class, 'update']);
            Route::DELETE('destroy', [CourseController::class, 'destroy']);
        });

        # Upload
        Route::post('upload/services', [UploadController::class, 'store']);
    });
});
