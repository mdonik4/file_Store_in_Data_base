<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/',[HomeController::class, 'Home'])->name('home');


Route::get('/Add-student', [StudentController::class, 'create'])->name('student-create');
Route::get('/Manage-student', [StudentController::class, 'index'])->name('student-index');
Route::post('/New-student', [StudentController::class, 'store'])->name('student-store');
