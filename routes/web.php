<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('/login', [UserController::class, 'login'])->name('auth.login');

Route::get('/register', [UserController::class, 'register'])->name('auth.register');

Route::post('/register/create', [UserController::class, 'create'])->name('create');

Route::get('/user/{id}', [UserController::class, 'show'])->name('show');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/login/enter', [UserController::class, 'enterUser'])->name('login.enter');

Route::post('/user/{id}/add', [UserController::class, 'addAutotoRental'])->name('addRental');

Route::get('/admin/login', [AdminController::class, 'login'])->name('login.admin');

Route::get('/admin/register', [AdminController::class, 'register'])->name('register.admin');

Route::post('/admin/login/enter', [AdminController::class, 'enter'])->name('enter.admin');

Route::post('/admin/register/create', [AdminController::class, 'create'])->name('create.admin');

Route::get('/admin', [AdminController::class, 'admin'])->name('show.admin');

Route::put('/admin/rental', [AdminController::class, 'update'])->name('rental.update');