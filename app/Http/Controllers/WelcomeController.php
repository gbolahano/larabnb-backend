<?php

namespace App\Http\Controllers;
use App\Listing;
use App\Reservation;
use Auth;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$listings = Listing::where('user_id', 1)->orderBy('created_at', 'desc')->get();
			// return view('welcome')->with('listings', $listings);
			return response()->json($listings);
    }

    public function show($id)
    {
    	$listing = Listing::where('id', $id)->with('user')->first();

			// return view('frontend.single-listing')->with('listing', $listing);
			return response()->json(["listing" => $listing]);
    }

    public function allListings()
    {
    	$listings = Listing::orderBy('created_at', 'desc')->get();
			// return view('frontend.home-listings-all')->with('listings', $listings);
			return response()->json($listings);
    }

    public function makeReservation(Request $request, $listing_id)
    {
    	$this->validate($request, [
    		'date_from' => 'required',
    		'date_to' => 'required',
    		'no_of_guests' => 'required'
			]);

    	$listing = Listing::find($listing_id);
    	$price = $listing->price * $request->no_of_guests;
    	$reservation = Reservation::create([
    		'user_id' => Auth::id(),
    		'listing_id' => $listing->id,
    		'date_from' => $request->date_from,
    		'date_to' => $request->date_to,
    		'no_of_guests' => $request->no_of_guests,
    		'price' => $price,
    		'owner_id' => $listing->user_id
    	]);

    	$data = [
					"success" => "Reservation created"
			];

			return response()->json($data);
    }
}
