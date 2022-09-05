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
Route::get('/', [HomeController::class, 'index'])->name('homepage');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/users', [AdminController::class, 'user']);
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::get('/delete-menu-item/{id}', [AdminController::class, 'deleteMenuItem']);
Route::get('/edit-item/{id}', [AdminController::class, 'editMenuItem']);
Route::post("/update/{id}", [AdminController::class, 'update']);
Route::post('/create-menu-item', [AdminController::class, 'createMenuItem']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);


Route::post("/reservation", [AdminController::class, 'reservation']);

require __DIR__ . '/auth.php';
