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

Route::any('/delete/owner', 'OwnerController@deleteOwner');
Route::any('/delete/zombie', 'ZombieController@deleteZombie');

Route::any('/view/owners', 'OwnerController@viewOwners');
Route::any('/view/zombies/{owner_id}', 'ZombieController@viewZombies');