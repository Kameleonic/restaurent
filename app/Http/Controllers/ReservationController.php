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

    public function confirmReservation($id)
    {
        $data = Reservation::find($id);

        $data->confirmed = 'confirmed';
        $data->save();
        // dd($data);

        return redirect()->back()->with('success', 'Successfully confirmed a reservation');
    }

    public function declineReservation($id)
    {
        $data = Reservation::find($id);

        $data->confirmed = 'declined';

        $data->save();
        // dd($data);

        return redirect()->back()->with('success', 'Successfully confirmed a reservation');
    }

    public function nullReservation($id)
    {
        $data = Reservation::find($id);

        $data->confirmed = NULL;
        $data->save();
        // dd($data);

        return redirect()->back()->with('success', 'Successfully confirmed a reservation');
    }
}
