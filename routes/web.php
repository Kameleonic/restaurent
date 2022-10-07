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

    Route::get('/portal/dashboard', [AdminController::class, 'portalHome']);

    // BEGIN - Report Routes
    Route::get('/portal/reports/reservations-booked-for-today', [ReservationController::class, 'reservationsBookedForToday']);
    Route::get('/portal/reports/reservations-need-confirming', [ReservationController::class, 'reservationsNeedConfirming']);
    // END - Report Routes

    Route::get('/portal/foodmenu', [AdminController::class, 'foodmenu']);

    Route::post("/portal/update/{id}", [AdminController::class, 'update']);

    Route::post('/portal/create-menu-item', [AdminController::class, 'createMenuItem']);

    Route::get('/portal/edit-item/{id}', [AdminController::class, 'editMenuItem']);

    Route::get('/portal/delete-menu-item/{id}', [AdminController::class, 'deleteMenuItem']);

    Route::get('/portal/users', [AdminController::class, 'user']);

    Route::get('/portal/deleteuser/{id}', [AdminController::class, 'deleteuser']);

    // BEGIN - Reservation Routes
    Route::get('/portal/reservations', [ReservationController::class, 'viewReservations']);

    Route::get("/portal/reservation/{id}", [ReservationController::class, 'reservationInfo']);

    Route::post("/portal/confirm-reservation/{id}", [ReservationController::class, 'confirmReservation']);

    Route::post("/portal/awaiting-reservation/{id}", [ReservationController::class, 'nullReservation']);

    Route::post("/portal/decline-reservation/{id}", [ReservationController::class, 'declineReservation']);
    // END - Reservation Routes

    // BEGIN - Settings Routes
    Route::get("/portal/settings", [AdminController::class, 'viewSettings']);
    // END - Settings Routes
});
require __DIR__ . '/auth.php';
