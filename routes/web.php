<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);

Route::get('/pdf/{id}', [UserController::class, 'pdf'])->name('pdf');

Route::get('/register', [UserController::class, 'registerVista'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('store');

Route::get('/users/{id}/update', [userController::class, 'updateVista'])->name('update');
Route::put('/users/{id}/update', [userController::class, 'update'])->name('update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete');

