<?php

class ZombieController extends BaseController {

	public function createZombie($owner_id)
	{
		$ip = Input::get('ip');
		$hostname = Input::get('hostname');
		$auth_key = Input::get('authentication_key');
		$os_version = Input::get('os_version');

		$zombie = new Zombie;
		$zombie->ip = $ip;
		$zombie->hostname = $hostname;
		$zombie->authentication_key = $auth_key;
		$zombie->os_version = $os_version;
		$zombie->owner_id = $owner_id;
		$zombie->save();

		return $zombie->id;
	}

	public function deleteZombie()
	{
		$id = Input::get('id');

		$zombie = Zombie::find($id);
		$zombie->delete();

		return 'Deleted';
	}

	public function viewZombies($owner_id)
	{
		$owner = Owner::find($owner_id);
		$zombies = $owner->zombies;

		return $zombies;
	}

}
