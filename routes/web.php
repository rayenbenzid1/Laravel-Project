<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [contactController::class, 'welcome']);
Route::get('/student-list', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::post('/save-student', [StudentController::class, 'saveStudent']);
Route::get('/edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('/update-student/{id}', [StudentController::class, 'updateStudent']);
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);