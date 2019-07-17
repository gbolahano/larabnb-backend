<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $fillable = [
		'user_id', 'name', 'price', 'todo', 'to_provide', 'to_know', 'to_bring', 'photos', 'status', 'duration'
	];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
