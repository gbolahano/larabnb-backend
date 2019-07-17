<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = ['user_id', 'listing_id', 'content'];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function listing()
  {
    return $this->belongsTo('App\Listing');
  }
}
