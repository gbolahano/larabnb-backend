<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Listing;
use App\Amenity;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::find($user_id);
        $listings = $user->listings()->orderBy('created_at', 'desc')->get();
        return view('users.listings.index')->with('listings', $listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //   $amenities = Amenity::all();
    //   return view('users.listings.listings-create')->with('amenities', $amenities);
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
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
            'photos' => 'required',
            'amenities' => 'required'
        ]);

        $listing = Listing::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'photos' => 'http://lorempixel.com/300/300?' + rand(8200, 8600)
        ]);

        if ($request->has('amenities')) {
            $listing->amenities()->attach($request->amenities);
        }

        $data = [
            "success" => "Listing created"
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
        $listing = Listing::where('id', $id)->first();
        $amenities = $listing->amenities;
        $data = [
            "listing" => $listing,
            "amenities" => $amenities
        ];
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $listing = Listing::where('id', $id)->where('user_id', Auth::id())->first();
        // $amenities = Amenity::all();
        // return view('users.listings.listings-edit')->with('listing', $listing)->with('amenities', $amenities);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $user_id)
    {
        $listing = Listing::where('id', $id)->where('user_id', $user_id)->first();

        if ($request->has('name')) {
            $listing->name = $request->name;
        }
        if ($request->has('price')) {
            $listing->price = $request->price;
        }
        if ($request->has('status')) {
            $listing->status = $request->status;
        }
        if ($request->has('description')) {
            $listing->description = $request->description;
        }
        if ($request->has('photos')) {
            $listing->photos = $request->photos;
        }

        if ($request->has('amenities')) {
            $listing->amenities()->sync($request->amenities);
        }

        $listing->save();

        $data = [
            "success" => "Lisiting updated"
        ];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $user_id)
    {
        $listing = Listing::find($id)->where('user_id', $user_id)->first();
        $listing->delete();

        $data = [
            "success" => "Lisiting deleted"
        ];

        return response()->json($data);
    }
}
