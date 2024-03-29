<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login']);
Route::post('/loginProses',[AuthController::class,'loginProses']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/class/datatable',[App\Http\Controllers\ClassController::class, 'datatable'])->name('class/datatable');
Route::get('/class',[App\Http\Controllers\ClassController::class, 'index']);
Route::get('/class/edit/{class_id}',[App\Http\Controllers\ClassController::class, 'edit']);
Route::post('/class/store',[App\Http\Controllers\ClassController::class, 'store'])->name('class/store');
Route::post('/class/update/{class_id}', [App\Http\Controllers\ClassController::class, 'update'])->name('class/update');
Route::any('/class/delete/{id}',[App\Http\Controllers\ClassController::class, 'destroy']);

Route::get('/user/datatable',[App\Http\Controllers\UserController::class, 'datatable'])->name('user/datatable');
Route::get('/user',[App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user/create');
Route::get('/user/show/{id}',[App\Http\Controllers\UserController::class, 'show']);
Route::get('/user/edit/{id}',[App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user/store',[App\Http\Controllers\UserController::class, 'store'])->name('user/store');
Route::post('/user/update/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('user/update');
Route::any('/user/delete/{id}',[App\Http\Controllers\UserController::class, 'destroy']);

Route::get('/student/datatable',[App\Http\Controllers\StudentController::class, 'datatable'])->name('student/datatable');
Route::get('/student',[App\Http\Controllers\StudentController::class, 'index']);
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student/create');
Route::get('/student/show/{id}',[App\Http\Controllers\StudentController::class, 'show']);
Route::get('/student/edit/{id}',[App\Http\Controllers\StudentController::class, 'edit']);
Route::post('/student/store',[App\Http\Controllers\StudentController::class, 'store'])->name('student/store');
Route::post('/student/update/{id}',[App\Http\Controllers\StudentController::class, 'update'])->name('student/update');
Route::any('/student/delete/{id}',[App\Http\Controllers\StudentController::class, 'destroy']);

Route::get('/teacher/datatable',[App\Http\Controllers\TeacherController::class, 'datatable'])->name('teacher/datatable');
Route::get('/teacher',[App\Http\Controllers\TeacherController::class, 'index']);
Route::get('/teacher/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('teacher/create');
Route::get('/teacher/show/{id}',[App\Http\Controllers\TeacherController::class, 'show']);
Route::get('/teacher/edit/{id}',[App\Http\Controllers\TeacherController::class, 'edit']);
Route::post('/teacher/store',[App\Http\Controllers\TeacherController::class, 'store'])->name('teacher/store');
Route::post('/teacher/update/{id}',[App\Http\Controllers\TeacherController::class, 'update'])->name('teacher/update');
Route::any('/teacher/delete/{id}',[App\Http\Controllers\TeacherController::class, 'destroy']);

Route::get('/achievement/datatable',[App\Http\Controllers\AchievementController::class, 'datatable'])->name('achievement/datatable');
Route::get('/achievement',[App\Http\Controllers\AchievementController::class, 'index']);
Route::get('/achievement/create', [App\Http\Controllers\AchievementController::class, 'create'])->name('achievement/create');
Route::get('/achievement/show/{id}',[App\Http\Controllers\AchievementController::class, 'show']);
Route::get('/achievement/edit/{id}',[App\Http\Controllers\AchievementController::class, 'edit']);
Route::post('/achievement/store',[App\Http\Controllers\AchievementController::class, 'store'])->name('achievement/store');
Route::post('/achievement/update/{id}',[App\Http\Controllers\AchievementController::class, 'update'])->name('achievement/update');
Route::any('/achievement/delete/{id}',[App\Http\Controllers\AchievementController::class, 'destroy']);
