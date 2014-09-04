<?php

class Zombie extends Eloquent
{
	protected $table = 'zombies';

	public function users()
	{
		return $this->hasMany('User');
	}

	public function commands()
	{
		return $this->hasMany('Command');
	}

	public function owner()
	{
		return $this->belongsTo('Owner');
	}
}