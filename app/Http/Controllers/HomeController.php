<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;



class HomeController extends Controller
{
    /**
     * Homepage without logging in.
     *
     * @return void
     */
    public function index()
    {
        // Get food items for display on the homepage
        $data = Food::all();
        return view("home", compact('data'));
    }


    /**
     * Decide where to redirect upon logging in.
     *
     * @param User $user
     * @return void
     */
    public function redirects(User $user)
    {
        $data = food::all();

        // Get the authenticated user
        $user = Auth::user();

        // Check if usertype = 1 (admin)
        if ($user->usertype == 0) {
            // If not redirect to homepage.
            return view('home', compact('data'));
        } else {
            // If so redirect to admin dashboard.
            return view('admin.admin-home');
        }
    }

    public function makeReservation(User $user)
    {
        if (auth()->user()) {
            return view('reservation');
        } else {
            return view('auth.login');
        }
    }

    /**
     * Make a reservation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reserve(Request $request)
    {
        $data = new Reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest_count = $request->guest_count;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();

        return redirect()
            ->back()
            ->with('message', 'Reservation successfully made.');
    }
}
