<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listings', 'WelcomeController@index');
Route::resource('amenities', 'AmenityController');
Route::get('reviews/{listing_id}/show', 'ReviewsController@show')->name('review.show');
Route::get('home-listing/{id}/show', 'WelcomeController@show')->name('single.listing.show');
Route::get('home-listings/all', 'WelcomeController@allListings')->name('home-listings.all');
Route::post('/register', 'UserController@store');
Route::group(['prefix' => 'user', 'middleware' => 'auth:api'], function () {
    // Route::get('/home', 'UserController@index')->name('user.home');
    Route::get('/home', 'UserController@index')->name('home');

    Route::get('listings', 'ListingController@index')->name('user.listings');
    // Route::get('listings/create', 'ListingController@create')->name('listings.create');
    Route::post('listings/store', 'ListingController@store')->name('listings.store');
    Route::get('listings/{id}/show', 'ListingController@show')->name('listings.show');
    Route::delete('listings/{id}/delete', 'ListingController@destroy')->name('listings.delete');
    // Route::get('listings/{id}/edit', 'ListingController@edit')->name('listings.edit');
    Route::post('listings/{id}/update', 'ListingController@update')->name('listings.update');

    Route::delete('reservation/{id}/delete', 'ReservationController@destroy')->name('reservation.delete');
    Route::post('home-listing/{listing_id}/make-reservation', 'WelcomeController@makeReservation')->name('home-listings.book');
    Route::get('reservation/{id}/decline/{owner_id}', 'ReservationController@decline')->name('reservation.decline');
    Route::get('reservation/{id}/accept/{owner_id}', 'ReservationController@accept')->name('reservation.accept');
    Route::get('reservation/{id}/show', 'ReservationController@show')->name('reservation.show');

    Route::post('reviews/{listing_id}/store', 'ReviewsController@store')->name('review.store');

   	// Route::get('profile', 'HomeController@profile')->name('profile');
    // Route::get('profile/edit', 'HomeController@edit')->name('users.profile.edit');
    Route::post('profile/{id}/update', 'UserController@update')->name('users.profile.update');
});

