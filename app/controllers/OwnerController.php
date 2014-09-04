<?php

class OwnerController extends BaseController {

	public function createOwner()
	{
		$name = Input::get('name');

		$owner = Owner::where('name', '=', $name)->first();

		if (is_null($owner)) {
			$owner = new Owner;
			$owner->name = $name;
			$owner->save();
		}

		return $owner->id;
	}

	public function deleteOwner()
	{
		$id = Input::get('id');

		$owner = Owner::find($id);
		$owner->delete();

		return 'Deleted';
	}

	public function viewOwners()
	{
		$owners = Owner::all();

		return $owners;
	}

}
