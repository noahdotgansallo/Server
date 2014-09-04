<?php

class Command extends Eloquent
{
	protected $table = 'commands';

	public function zombie()
	{
		return $this->belongsTo('Zombie');
	}
}