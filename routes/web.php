<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-students',[StudentController::class,'create'])->name('student.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add-students', [StudentController::class, 'store'])->name('student.store');

Route::get('/all-students', [StudentController::class, 'index'])->name('student.index');

Route::get('/edit-student/{student_id}', [StudentController::class, 'edit'])->name('student.edit');

Route::post('/update-students/{student_id}', [StudentController::class, 'update'])->name('student.update');

Route::get('/delete-student/{student_id}', [StudentController::class, 'destroy'])->name('student.delete');
