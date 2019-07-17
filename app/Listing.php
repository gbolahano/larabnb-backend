<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
    	'name', 'user_id', 'price', 'description', 'photos', 'status'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function amenities()
    {
      return $this->belongsToMany('App\Amenity');
    }

    public function reviews()
    {
      return $this->hasMany('App\Review');
    }

}
