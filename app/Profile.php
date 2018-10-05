<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');	
	}

	public function posts()
	{
		return $this->hasMany('App\Post');	
	}
	protected $fillable = ['user_id','avatar','facebook','about','youtube'];
    
}
