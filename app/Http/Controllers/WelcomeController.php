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
    	$listings = Listing::orderBy('created_at', 'desc')->take(4)->get();
			// return view('welcome')->with('listings', $listings);
			return response()->json($listings);
    }

    public function show($id)
    {
			$listing = Listing::where('id', $id)->first();
			$listing->amenities;
			// $data = [
			// 	'listing' => $listing,
			// 	'amenities' => $amenities
			// ];

			// return view('frontend.single-listing')->with('listing', $listing);
			return response()->json($listing);
    }

    public function allListings()
    {
    	$listings = Listing::orderBy('created_at', 'desc')->get();
			// return view('frontend.home-listings-all')->with('listings', $listings);
			return response()->json($listings);
    }

    public function makeReservation(Request $request, $id)
    {
    	$this->validate($request, [
    		'date_from' => 'required',
    		'date_to' => 'required',
    		'no_of_guests' => 'required'
    	]);

    	$listing = Listing::find($id);
    	$price = $listing->price * $request->input('no_of_guests');
    	$reservation = Reservation::create([
    		'user_id' => Auth::id(),
    		'listing_id' => $listing->id,
    		'date_from' => $request->input('date_from'),
    		'date_to' => $request->input('date_to'),
    		'no_of_guests' => $request->input('no_of_guests'),
    		'price' => $price,
    		'owner_id' => $listing->user_id
    	]);

    	// session()->flash('success', 'Booked successfully');
			// return redirect()->back();
			$data = [
				"success" => "Booked successfully"
			];
			return response()->json($data);
    }
}
