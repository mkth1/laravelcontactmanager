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

// Route::get('/', function()
// {
// 	return View::make('contacts.index');
// });
Route::get('/', 'ContactsController@index');

Route::resource('contacts', 'ContactsController');

Route::get('/form', function()
{
	return View::make('form');
});


Event::listen('404', function()
{	
	return Response::error('404');
});

Event::listen('500', function()
{	
	return Response::error('500');
});

Event::listen('illuminate.query', function($sql)
{
    //var_dump($sql);
}); 

