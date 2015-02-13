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

//TODO
// should there quantity/edition in book(info) edit
// Pagination in book/view

Route::resource('user','UserController');

Route::resource('book','BookController');
Route::when('book/create','admin',array('get'));
Route::when('book/*/edit','admin',array('get'));
Route::when('book','admin',array('put','post'));
Route::when('book/*','admin',array('put','post'));
Route::when('book','auth',array('get'));
Route::when('book/*','auth',array('get'));

Route::resource('bookitem','BookItemController');

// Chooses the user homepage
Route::get('/', array('before'=>'auth','uses'=>'UserController@home'));

Route::controller('search','SearchController');

Route::get('/contact', function()
{
return View::make('query.create');
});

Route::get('/about', function()
{
return View::make('about');
});


Route::get('/changepassword', function()
{
return View::make('change-password');
});

Route::get('/resetpassword', function()
{
return View::make('reset-password');
});

Route::get('/login', 'LoginController@showLogin');

Route::post('/login', 'LoginController@doLogin');

Route::post('/logout', 'LoginController@doLogout');


// Handler for 404 errors
App::missing(function($exception) {
    return Response::view('404', array(), 404);
});

// Handler for the 'model not found' exception
use Illuminate\Database\Eloquent\ModelNotFoundException;
App::error(function(ModelNotFoundException $e) {
    return Response::view('404', array(), 404);
});

// Handler for general http errors
App::error(function(Exception $exception, $code) {
  if ($code==403)
    return 'Not allowed';
});

// Test route
Route::get('/test', function() {
  $validator = Validator::make(
    array('name'=>'Day3'),
    array('name'=>'alpha|min:5'));
  if ($validator->fails()) {
    return $validator->messages()->all();
  }
  else
    return 'notfails';
});
