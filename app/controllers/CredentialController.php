<?php

class CredentialController extends BaseController {

	public function createCredential($user_id)
	{
		$server = Input::get('server');
		$username = Input::get('username');
		$password = Input::get('password');

		$credential = Credential::where('server', '=', $server)->first();
		if (is_null($credential)) {
			$credential = new Credential;
			$credential->server = $server;
			$credential->username = $username;
			$credential->password = $password;
			$credential->user_id = $user_id;
			$credential->save();
		}

		return $credential->id;
	}

	public function viewCredentials($user_id)
	{
		$user = User::find($user_id);
		$credentials = $user->credentials;

		return $credentials;
	}

}
