<?php

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

Route::get('/',[UserController::class, 'show']);
Route::get('/alluser',[UserController::class, 'getAllUser'])->name('alluser');



Route::get('/addnewuser', [UserController::class, 'getAddForm'])->name('getAddForm');
Route::post('/createnewuser', [UserController::class, 'addNewUser'])->name('create');
Route::get('/user/{id}', [UserController::class, 'getUser'])->name('getUser');