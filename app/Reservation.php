<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	protected $fillable = [
		'user_id', 'listing_id', 'date_from', 'date_to', 'no_of_guests', 'price', 'owner_id'
	];
	
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function listing()
    {
    	return $this->belongsTo('App\Listing');
    }
}
