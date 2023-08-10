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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('task')->group(function(){
        Route::get('/', [TaskController::class, 'show'])->name('task.show');
        Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
        Route::post('/task/new_action', [TaskController::class, 'store'])->name('task.store');
        Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
        Route::put('/task/edit_action/{id}', [TaskController::class, 'update'])->name('task.update');
        Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
    });
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_store'])->name('login.store');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_store'])->name('register.store');

