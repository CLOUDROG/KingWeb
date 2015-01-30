<?php

/*
|--------------------------------------------------------------------------
| KING - visi vajadzigie celi
|--------------------------------------------------------------------------
*/

//Register&Login
Route::controller('user', 'UserController');    //user/login
Route::controller('galery', 'GaleryController');    //galery
Route::controller('blog', 'BlogController');    //blog



Route::get('/', function()
{
	return View::make('index');
});

