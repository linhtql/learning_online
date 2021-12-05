<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageCourseController;
use App\Http\Controllers\TransactionController;
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

    Route::get('contact', [MainController::class, 'contact'])->name('contact-us');

    Route::get('course-list/{id}/{slug}.html', [PageCourseController::class, 'index']);

    Route::get('course-detail/{id}/{slug}.html', [PageCourseController::class, 'course_detail']);

    Route::get('payment/{id_user}/{id_course}', [TransactionController::class, 'payment'])->name('payment');
    Route::post('payment/{id_user}/{id_course}', [TransactionController::class, 'store']);

    Route::get('study/{id_course}/{slug}.html', [PageCourseController::class, 'course_study']);

    Route::get('mycourse', [PageCourseController::class, 'mycourse'])->name('mycourse');
});

Auth::routes();

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

# Admin and family
Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('home', [AdminController::class, 'index'])->name('admin-home');

        # Category
        Route::prefix('categories')->group(function () {
            Route::post('add', [CategoryController::class, 'store']);
            Route::get('add', [CategoryController::class, 'create'])->name('add-category');
            Route::get('list', [CategoryController::class, 'index'])->name('show-category');
            Route::DELETE('destroy', [CategoryController::class, 'destroy']);
            Route::get('edit/{category}', [CategoryController::class, 'show']);
            Route::post('edit/{category}', [CategoryController::class, 'update']);
        });

        # Course
        Route::prefix('courses')->group(function () {
            Route::get('add', [AdminCourseController::class, 'create'])->name('add-course');
            Route::post('add', [AdminCourseController::class, 'store']);
            Route::get('list', [AdminCourseController::class, 'show'])->name('show-course');
            Route::get('edit/{course}', [AdminCourseController::class, 'edit']);
            Route::post('edit/{course}', [AdminCourseController::class, 'update']);
            Route::DELETE('destroy', [AdminCourseController::class, 'destroy']);
        });

        # User manager
        Route::prefix('user')->group(function () {
            Route::get('/', [UserManageController::class, 'index'])->name('user-manage');
            Route::get('add/{id}', [UserManageController::class, 'create']);
            Route::post('add/{id}', [UserManageController::class, 'store']);
        });
    });
});


# Upload
Route::post('upload/services', [UploadController::class, 'store']);