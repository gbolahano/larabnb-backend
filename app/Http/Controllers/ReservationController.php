<?php

namespace App\Http\Controllers;
use Auth;
use App\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::where('id', $id)->first();
        $reserved = $reservation->listing;
        return response()->json($reserved);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $user_id)
    {
        $reservation = Reservation::find($id)->where('user_id', $user_id)->first();
        $reservation->delete();

        $data = [
            "success" => "Reservation deleted"
        ];

        return response()->json($data);
    }
    public function decline($id, $owner_id)
    {
        $reservation = Reservation::find($id)->where('owner_id', $owner_id)->first();
        $reservation->delete();

        $data = [
            "success" => "Reservation declined"
        ];

        return response()->json($data);
    }
    public function accept($id, $owner_id)
    {
        $reservation = Reservation::find($id)->where('owner_id', $owner_id)->first();
        $reservation->status = '1';
        $reservation->save();

        $data = [
            "success" => "Reservation accepted"
        ];
        return response()->json($data);
    }
}
