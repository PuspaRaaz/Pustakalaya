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

// TODO
// Admin have functions like adding a users, books, bookinfos
//    that can be done in admin home page.
//
// A view similar to user can be made for book info
// containing details, similar books, it's instances and notificaitons


Route::get('/somebook', function()
{
	return View::make('bookinfo.view');
});


Route::get('/book/create', function()
{
	return View::make('bookinfo.create');
});

Route::get('/particularbook/create', function()
{
	return View::make('book.create');
});

Route::get('/book', function()
{
	return View::make('bookinfo.list');
});


Route::get('/particularbook', function()
{
	return View::make('book.list');
});

/*
Route::get('/user/create/',function()
{
	return View::make('resource.user.create');
});

Route::get('/user/',function()
{
	return View::make('resource.user.list');
});
 */

Route::resource('user','UserController');
Route::get('/users','UserController@index');

Route::resource('book','BookController');
Route::get('/books','BookController@index');

Route::resource('bookitem','BookItemController');
Route::get('/bookitems','BookItemController@index');

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/', array('before'=>'auth', function()
{
	return View::make('home');
}));

Route::get('/student', function()
{
	return View::make('user.view');
});

Route::get('/history', function()
{
	return View::make('user.history');
});

Route::get('/admin', function()
{
	return View::make('user.admin.home');
});

Route::get('/librarian', function()
{
	return View::make('user.librarian.home');
});

Route::get('/verifier', function()
{
	return View::make('user.verifier.home');
});

Route::get('/user/edit', function()
{
	return View::make('user.edit');
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

// Search is a post request to book info list
Route::post('/search', function()
{
	return View::make('bookinfo.list');
});

Route::get('/advance', function()
{
	return View::make('advance');
});

Route::get('/booklog', function()
{
	return View::make('booklog');
});

Route::get('/add', function()
{
	return View::make('add');
});

Route::get('/remove', function()
{
	return View::make('remove');
});

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
