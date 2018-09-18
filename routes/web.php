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

Route::get('/', function () {return view('pages/home');});
Route::get('home', function (){return view('pages/home');});
Route::get('signup', function (){ return view('pages/register'); });
Route::get('/header',function(){return response("Hello", 200)->header('Content-Type', 'text/html');});
Route::get('json',function(){return response()->json(['name' => 'Dahabu Mkawa', 'state' => 'Tanzania']);});

//user registration routes
Route::get('/register', 'Auth\RegisterController@create');
Route::post('/register', 'Auth\RegisterController@store');
Route::get('/register2', 'Auth\RegisterController@addSkills');

//navigation pages
Route::get('/', 'Auth\RegisterController@home');
Route::get('/about', 'Auth\RegisterController@about');
Route::get('/jobs', 'Auth\RegisterController@jobs');
Route::get('/categories', 'Auth\RegisterController@categories');
Route::get('/developers', 'Auth\RegisterController@developers');

//login routes
Route::post('/login', 'Auth\SessionsController@userLogin');
Route::get('/logout', 'Auth\SessionsController@userLogout');
