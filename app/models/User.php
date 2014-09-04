<?php

class User extends Eloquent
{
	protected $table = 'users';

	public function zombie()
	{
		return $this->belongsTo('Zombie');
	}

	public function credentials() 
	{
		return $this->hasMany('Credential');
	}
}