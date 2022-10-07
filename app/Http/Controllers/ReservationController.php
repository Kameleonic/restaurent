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

        $dataTableTitle = 'A complete table of all reservation requests, with paging and search.';

        $reservationsCount = Reservation::all()->count();

        $todaysDate = Carbon::now()->toDateString();

        $tomorrowsDate = Carbon::now()->addDay()->toDateString();

        $reservationsConfirmed = Reservation::select('id')
            ->where('confirmed', 'confirmed')
            ->count();

        $reservationsToday = Reservation::select('date')
            ->where('date', $todaysDate)
            ->count();

        $reservationsTomorrow = Reservation::select('date')
            ->whereDate('date', $tomorrowsDate)
            ->count();

        $reservationCount = Reservation::count();

        $reservationsNeedConfirming = Reservation::select('reservations')
            ->where('confirmed', NULL)
            ->where('created_at', '>=', $todaysDate)
            ->count();


        // dd($reservationsNeedConfirming);

        return view(
            'admin.reservations',
            compact(
                'reservations',
                'reservationsCount',
                'reservationsConfirmed',
                'reservationsToday',
                'reservationsTomorrow',
                'todaysDate',
                'dataTableTitle',
                'reservationsNeedConfirming'
            )
        );
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

    public function reservationsNeedConfirming()
    {
        $todaysDate = Carbon::now()->toDateString();

        $data = Reservation::select()
            ->where('confirmed', NULL)
            ->where('created_at', '>=', $todaysDate)
            ->get();


        return view('admin.reports.reservations-need-confirming', compact('data'));
    }
}
