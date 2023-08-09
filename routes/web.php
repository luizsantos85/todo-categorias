<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/task', [TaskController::class, 'show'])->name('task.show');
Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/new_action', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/edit_action/{id}', [TaskController::class, 'update'])->name('task.update');
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');


Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_action', [AuthController::class, 'store'])->name('register.store');

