<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/signinform', [AuthController::class, 'signInForm'])->name('signinform');
    Route::post('/singin', [AuthController::class, 'singin'])->name('user.singin');

    Route::get('/', [UserController::class, 'index']);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');



    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
    // Authentication
