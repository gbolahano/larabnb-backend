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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $user = User::find($id);
        $reservations = $user->reservations()->orderBy('created_at', 'desc')->take(5)->get();

        $bookings = Reservation::where('owner_id', $id)->orderBy('created_at', 'desc')->take(5)->get();

        $data = [
            "reservations" => $reservations,
            "bookings" => $bookings
        ];

        return response()->json($data);
    }

    public function profile()
    {
        // return view('users.profile.index');
    }

    public function edit()
    {
        // return view('users.profile.edit');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();

        $data = [
            "success" => "Profile updated"
        ];

        return response()->json($data);
    }
}
