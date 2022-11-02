<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\EmployeeController;

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







// View reservation page
Route::get("/reservation", [HomeController::class, 'makeReservation']);
// Make a reservation
Route::post("/reserve", [HomeController::class, 'reserve']);


// * Admin Routes * //

Route::group(
    ['middleware' => ['auth']],
    function () {

        Route::get('/portal/dashboard', [AdminController::class, 'portalHome'])->name('portal.home');

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
        Route::get("/portal/settings", [AdminController::class, "viewSettings"]);
        // END - Settings Routes

        // BEGIN - Employee Routes
        Route::get("/portal/employees/", [EmployeeController::class, "employeesIndex"])->name('employees.index');
        Route::get("/portal/employee/{id}", [EmployeeController::class, "viewEmployee"])->name('employees.view');
        // Route::get("/portal/employee/{id}/salary", [EmployeeController::class, "setNewSalary"])->name('employees.set-new-salary');
        Route::post("/portal/employee/salary/{employee_id}", [EmployeeController::class, "saveNewSalary"])->name('employees.save-new-salary');
        Route::delete("/portal/employees/delete/{employee_id}", [EmployeeController::class, "employeesDelete"])->name('employees.delete');
        Route::post("/portal/employees/new-employee", [EmployeeController::class, "createEmployee"])->name('create-employee');
        Route::post("/portal/employees/update/{employee_id}", [EmployeeController::class, "updateEmployee"])->name('update-employee');

        // END - Employee Routes
    }
);
require __DIR__ . '/auth.php';
