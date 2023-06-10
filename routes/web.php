<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TodoController;
use App\Http\Controllers\Admin\Users\LoginController;

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

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login', [LoginController::class, 'store']);
Route::post('/todo-tasks', [LoginController::class, 'store']);
Route::get('/todo-tasks', [TodoController::class, 'index'])->name('index');
Route::post('/todo-tasks', [TodoController::class, 'store'])->name('store');
Route::delete('/{todos:id}', [TodoController::class, 'destroy'])->name('destroy');
Route::middleware(['auth'])->group(function () {

});
