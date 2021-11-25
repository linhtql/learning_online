<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

# Admin and family
Route::middleware(['auth', 'admin'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('home', [AdminController::class, 'index'])->name('admin-home');
        
        # Category
        Route::prefix('categories')->group(function(){
            Route::get('add', [CategoryController::class, 'store']);
            Route::post('add', [CategoryController::class, 'create']);
            Route::get('list', [CategoryController::class, 'index'])->name('category-list');
            Route::DELETE('destroy', [CategoryController::class, 'destroy']);
            Route::get('edit/{slug}', [CategoryController::class, 'show']);
            Route::post('edit/{category}', [CategoryController::class, 'update']);
        });
    });
});