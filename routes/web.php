<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('home', [HomeController::class, 'index']);

Route::get('/users', [AdminController::class, 'user']);

Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

require __DIR__ . '/auth.php';
