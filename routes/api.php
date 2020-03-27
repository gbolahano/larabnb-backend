<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listings', 'WelcomeController@index');
Route::resource('amenities', 'AmenityController');
Route::post('reviews/{listing_id}/store', 'ReviewsController@store')->name('review.store');
Route::get('home-listing/{id}/show', 'WelcomeController@show')->name('single.listing.show');
Route::get('home-listings/all', 'WelcomeController@allListings')->name('home-listings.all');
Route::post('home-listing/{id}/make-reservation', 'WelcomeController@makeReservation')->name('home-listings.book');
Route::post('/register', 'UserController@store');
Route::group(['prefix' => 'user'], function () {
    // Route::get('/home', 'UserController@index')->name('user.home');
    Route::get('{id}/home', 'UserController@index')->name('home');

    Route::get('listings/{user_id}', 'ListingController@index')->name('user.listings');
    // Route::get('listings/create', 'ListingController@create')->name('listings.create');
    Route::post('listings/store', 'ListingController@store')->name('listings.store');
    Route::get('listings/{id}/show', 'ListingController@show')->name('listings.show');
    Route::get('listings/{id}/delete/{user_id}', 'ListingController@destroy')->name('listings.delete');
    // Route::get('listings/{id}/edit', 'ListingController@edit')->name('listings.edit');
    Route::post('listings/{id}/update/{user_id}', 'ListingController@update')->name('listings.update');

    Route::get('reservation/{id}/delete/{user_id}', 'ReservationController@destroy')->name('reservation.delete');
    Route::get('reservation/{id}/decline/{owner_id}', 'ReservationController@decline')->name('reservation.decline');
    Route::get('reservation/{id}/accept/{owner_id}', 'ReservationController@accept')->name('reservation.accept');
    Route::get('reservation/{id}/show', 'ReservationController@show')->name('reservation.show');

   	// Route::get('profile', 'HomeController@profile')->name('profile');
    // Route::get('profile/edit', 'HomeController@edit')->name('users.profile.edit');
    Route::post('profile/{id}/update', 'UserController@update')->name('users.profile.update');
});

