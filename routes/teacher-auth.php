<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\Auth\RegisteredUserController;
use App\Http\Controllers\Teacher\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TeacherController;

Route::middleware('guest:teacher')->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:teacher')->prefix('teacher')->name('teacher.')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('teacher.dashboard');
    // })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('/ashish', [TeacherController::class, 'update'])->name('ashish');
    // Route::get('/index', [TeacherController::class, 'index'])->name('index');
    Route::get('/dashboard', [TeacherController::class, 'index'])->name('dashboard')->middleware(['verified']);

  
    
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

       

      

});

