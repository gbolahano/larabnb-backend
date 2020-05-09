<?php


/* Route::get('/', 'WelcomeController@index');
Route::resource('amenities', 'AmenityController');
Route::post('reviews/{listing_id}/store', 'ReviewsController@store')->name('review.store');
Route::get('home-listing/{id}/show', 'WelcomeController@show')->name('single.listing.show');
Route::get('home-listings/all', 'WelcomeController@allListings')->name('home-listings.all');
Route::post('home-listing/{id}/make-reservation', 'WelcomeController@makeReservation')->name('home-listings.book');
Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    // Route::get('/home', 'UserController@index')->name('user.home');
    Route::get('listings', 'ListingController@index')->name('user.listings');
    Route::get('listings/create', 'ListingController@create')->name('listings.create');
    Route::post('listings/store', 'ListingController@store')->name('listings.store');
    Route::get('listings/{id}/show', 'ListingController@show')->name('listings.show');
    Route::get('listings/{id}/delete', 'ListingController@destroy')->name('listings.delete');
    Route::get('listings/{id}/edit', 'ListingController@edit')->name('listings.edit');
    Route::post('listings/{id}/update', 'ListingController@update')->name('listings.update');
    Route::get('reservation/{id}/delete', 'ReservationController@destroy')->name('reservation.delete');
    Route::get('reservation/{id}/decline', 'ReservationController@decline')->name('reservation.decline');
    Route::get('reservation/{id}/accept', 'ReservationController@accept')->name('reservation.accept');
    Route::get('reservation/{id}/show', 'ReservationController@show')->name('reservation.show');
   	Route::get('profile', 'HomeController@profile')->name('profile');
    Route::get('profile/edit', 'HomeController@edit')->name('users.profile.edit');
    Route::post('profile/update', 'HomeController@update')->name('users.profile.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */

Route::view('', 'display');
