<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewReservations()
    {
        $reservations = Reservation::all();

        return view('admin.reservations', compact('reservations'));
    }

    public function reservationInfo($id)
    {
        $reservation = Reservation::find($id);
        $reservationTime = Carbon::parse($reservation->time);
        $now = Carbon::now()->addHour()->toTimeString();
        // dd($reservation);
        $confirmedAtTime = Carbon::parse($reservation['confirmed_time']);
        $oneHourAlert = [
            'name' => 'message',
            'value' => 'This reservation is due soon!'
        ];

        $timeForAlert = $reservationTime->subHour()->toTimeString();
        $alert = '';

        if ($timeForAlert <= Carbon::parse($reservation->time)->toTimeString()) {
            $alert = true;
        } elseif ($timeForAlert > Carbon::parse($reservation->time)->toTimeString()) {
            $alert = false;
        } else {
            $alert = false;
        }
        // dd($oneHourAlert['value']);


        // dd($timeForAlert);
        // if ($confirmedAtTime == \Carbon\Carbon::now()->subHours(3)) {
        // } else {

        //     return;
        // }

        return view('admin.partials.reservationInfoModal', compact('reservation', 'alert', 'oneHourAlert', 'timeForAlert'));
    }

    public function confirmReservation($id)
    {
        $data = Reservation::find($id);

        $data->confirmed = 'confirmed';
        $data->confirmed_date = now();
        $data->confirmed_time = now()->addHour()->toTimeString();
        $data->save();
        // dd($data);

        return redirect()->back()->with('success', 'Successfully confirmed a reservation');
    }

    public function declineReservation($id)
    {
        $data = Reservation::find($id);

        $data->confirmed = 'declined';
        $data->declined_date = now();
        $data->declined_time = now()->addHour()->toTimeString();
        $data->save();


        // dd($data);

        return redirect()->back()->with('success', 'Successfully declined a reservation');
    }

    public function nullReservation($id)
    {
        $data = Reservation::find($id);

        $data->confirmed = NULL;
        $data->save();
        // dd($data);

        return redirect()->back()->with('success', 'Successfully reverted the reservation');
    }

    public function reservationsBookedForToday()
    {
        $todaysDate = Carbon::now()->toDateString();

        $data = Reservation::select()
            ->where('date', $todaysDate)
            ->get();

        return view('admin.reports.booked-for-today', compact('data'));
    }
}
