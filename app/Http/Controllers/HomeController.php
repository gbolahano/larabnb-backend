<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $reservations = $user->reservations()->orderBy('created_at', 'desc')->take(5)->get();

        $bookings = Reservation::where('owner_id', Auth::id())->orderBy('created_at', 'desc')->take(5)->get();
        return view('home')->with('reservations', $reservations)
                        ->with('bookings', $bookings);
    }

    public function profile()
    {
        return view('users.profile.index');
    }

    public function edit()
    {
        return view('users.profile.edit');
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->save();

        session()->flash('success', 'Profile Updated');
        return redirect()->back();
    }
}
