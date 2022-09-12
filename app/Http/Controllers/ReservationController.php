<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function __construct()
    {
    }

    public function viewReservations()
    {
        $reservations = Reservation::all();

        return view('admin.reservations', compact('reservations'));
    }

    public function reservationInfo($id)
    {
        $reservation = Reservation::find($id);

        return view('admin.partials.reservationInfoModal', compact('reservation'));
    }
}
