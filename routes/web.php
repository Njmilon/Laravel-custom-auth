<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

Route::get('/registration/index', [AuthController::class, 'registration_index'])->name('registration.index');
Route::post('/registration/create', [AuthController::class, 'registration_create'])->name('registration.create');


Route::get('/login/index', [AuthController::class, 'login_index'])->name('login.index');
Route::post('/login/create', [AuthController::class, 'login_create'])->name('login.create');