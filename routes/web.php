<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;

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
Route::get('/home', [HomeController::class, 'index'])->name('homepage');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// View reservation page
Route::get("/reservation", [HomeController::class, 'makeReservation']);
// Make a reservation
Route::post("/reserve", [HomeController::class, 'reserve']);


// * Admin Routes * //

Route::group(['middleware' => ['auth']], function () {

    Route::get('/users', [AdminController::class, 'user']);

    Route::get('/foodmenu', [AdminController::class, 'foodmenu']);

    Route::post("/update/{id}", [AdminController::class, 'update']);

    Route::post('/create-menu-item', [AdminController::class, 'createMenuItem']);

    Route::get('/edit-item/{id}', [AdminController::class, 'editMenuItem']);

    Route::get('/delete-menu-item/{id}', [AdminController::class, 'deleteMenuItem']);

    Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

    Route::get("/reservations", [ReservationController::class, 'viewReservations']);

    Route::get("/reservation/{id}", [ReservationController::class, 'reservationInfo']);
    Route::post("/confirm-reservation/{id}", [ReservationController::class, 'confirmReservation']);
    Route::post("/awaiting-reservation/{id}", [ReservationController::class, 'nullReservation']);
    Route::post("/decline-reservation/{id}", [ReservationController::class, 'declineReservation']);
});
require __DIR__ . '/auth.php';
