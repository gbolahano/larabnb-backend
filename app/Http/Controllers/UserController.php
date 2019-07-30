<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Reservation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::find($id);

        // get user listings
        /* $data = DB::table('users')
            ->where('users.id', $id)
            ->join('listings', 'users.id', '=', 'listings.user_id')
            ->get(); */

        // $reservations = $user->reservations()->orderBy('created_at', 'desc')->take(5)->get();

        $reservations = DB::table('reservations')
            ->where('reservations.user_id', $id)
            ->select('users.name as user_name', 'photos', 'date_to', 'date_from', 'listings.name as listing_name', 'description', 'reservations.price as price', 'no_of_guests', 'status', 'email')
            ->join('listings', 'reservations.listing_id', '=', 'listings.id')
            ->join('users', 'reservations.owner_id', '=', 'users.id')
            ->orderBy('reservations.created_at', 'desc')
            ->get();

        // $bookings = Reservation::where('owner_id', $id)->orderBy('created_at', 'desc')->take(5)->get();

        $bookings = DB::table('reservations')
            ->where('reservations.owner_id', $id)
            ->select('users.name as user_name', 'photos', 'date_to', 'date_from', 'listings.name as listing_name', 'description', 'reservations.price as price', 'no_of_guests', 'status', 'email')
            ->join('listings', 'reservations.listing_id', '=', 'listings.id')
            ->join('users', 'reservations.user_id', '=', 'users.id')
            ->orderBy('reservations.created_at', 'desc')
            ->get();

        $data = [
            "reservations" => $reservations,
            "bookings" => $bookings
        ];

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $data = [
            "success" => "Registration Sucessful"
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
