<?php

class UserController extends BaseController {

	public function createUser($zombie_id)
	{
		$name = Input::get('name');
		$password = Input::get('password');

		$zombie = Zombie::find($zombie_id);
		$users = $zombie->users;
		$user = $users->where('username', '=', $name)->first();
		if (is_null($user)) {
			$user = new User;
			$user->username = $name;
			$user->password = $password;
			$user->zombie_id = $zombie_id;
			$user->save();
		}

		return $user->id;
	}

	public function deleteUser()
	{
		$id = Input::get('id');

		$user = User::find($id);
		$zombie->delete();

		return 'Deleted';
	}

	public function viewUsers($zombie_id)
	{
		$zombie = Zombie::find($zombie_id);
		$users = $zombie->users;

		return $users;
	}

}
