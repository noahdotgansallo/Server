<?php

class Credential extends Eloquent
{
	protected $table = 'credentials';

	public function user()
	{
		return $this->belongsTo('User');
	}
}