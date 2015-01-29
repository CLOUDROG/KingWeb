<?php

/*
|--------------------------------------------------------------------------
| KING - visi vajadzigie celi
|--------------------------------------------------------------------------
*/

//Register&Login
Route::controller('user', 'UserController');    //user/login



Route::get('/', function()
{
	return View::make('index');
});

