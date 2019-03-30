<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::group(['middleware' => ['web','auth']], function()
{

	Route::get('/', function () 
	{
    	return view('home');
	});	
	Route::get('/', function()
	{
		if(Auth::user()->admin == 0)
		{
			return view('home');
		}
		else
		{
			return view('home');
		}
	});
});

Route::get('/delete-user','UserController@index');
Route::get('/delete-user/{id}','UserController@destroy');
