<?php

class Owner extends Eloquent
{
	protected $table = 'owners';

	public function zombies()
	{
		return $this->hasMany('Zombie');
	}
}