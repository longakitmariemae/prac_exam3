<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
    route::get('students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
    route::post('students', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
    route::get('students/{student}', [\App\Http\Controllers\StudentController::class, 'show'])->name('students.show');
    route::get('students/{student}/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
    route::put('students/{student}', [\App\Http\Controllers\StudentController::class, 'update'])->name('students.update');
    route::delete('students/{student}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('students.destroy');


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
