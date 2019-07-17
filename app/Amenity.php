<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $fillable = ['name'];

    public function listings()
    {
      return $this->belongsToMany('App\Listing');
    }
}
