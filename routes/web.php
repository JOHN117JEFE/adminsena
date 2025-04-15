<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\OrmController;

Route::resource('teachers', TeacherController::class);
Route::resource('areas', AreaController::class);
Route::resource('training-centers', TrainingCenterController::class);
Route::resource('courses', CourseController::class);
Route::resource('apprentices', ApprenticeController::class);
Route::resource('computers', ComputerController::class);
Route::resource('course-teacher', CourseTeacherController::class);


Route::get('/consultas', [OrmController::class, 'consultas']);

Route::get('/apprentices/create', [ApprenticeController::class, 'create'])->name('apprentices.create');
Route::post('/apprentices', [ApprenticeController::class, 'store'])->name('apprentices.store');