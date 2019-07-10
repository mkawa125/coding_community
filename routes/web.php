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

Route::get('welcome', function (){return view('welcome');});
Route::get('signup', function (){ return view('pages/register'); });
Route::get('header',function(){return response("Hello", 200)->header('Content-Type', 'text/html');});
Route::get('json',function(){return response()->json(['name' => 'Dahabu Mkawa', 'state' => 'Tanzania']);});

//user registration routes
Route::get('/register', 'Auth\RegisterController@create');
Route::get('/register', 'Auth\RegisterController@create');
Route::post('register', 'Auth\RegisterController@store');
Route::get('/register2', 'Auth\RegisterController@createSkills');
Route::post('/register2', 'Auth\RegisterController@addSkills');

//registration routes
Route::group(['prefix' => 'signup'], function () {
    Route::get('create', 'Auth\RegisterController@create');
    Route::post('store', 'Auth\RegisterController@store');
    Route::get('skills', 'Auth\RegisterController@createSkills');
    Route::post('addSkills', 'Auth\RegisterController@addSkills');
});

//user notes routes
Route::group(['prefix' => 'notes'], function (){
    Route::get('data', 'NotesController@data');
    Route::get('/{id}/details', 'NotesController@details')->name('notes.details');
    Route::get('create', 'NotesController@create');
    Route::post('save', 'NotesController@save');
    Route::get('edit', 'NotesController@edit');
    Route::get('update', 'NotesController@update');
    Route::post('delete', 'NotesController@deleteNotes');
});

//user accounts routes
Route::group(['prefix' => 'users'], function (){
   Route::get('profile', 'UsersController@profile');
   Route::get('setting', 'UsersController@setting');
   Route::post('update', 'UsersController@update');
});

//navigation pages
Route::get('/', 'HomeController@index');
Route::post('/', 'Auth\RegisterController@home');

Route::get('about', 'HomeController@about');
Route::post('about', 'Auth\RegisterController@about');

Route::get('jobs', 'HomeController@jobs');
Route::post('jobs', 'Auth\RegisterController@jobs');

Route::get('categories', 'HomeController@categories');
Route::post('categories', 'Auth\RegisterController@categories');

Route::get('developers', 'HomeController@developers');
Route::post('developers', 'Auth\RegisterController@developers');

Route::get('chats', 'ChartsController@create')->name('chat.create');
Route::post('developers', 'Auth\RegisterController@developers');

Route::get('/logout', 'Auth\RegisterController@logout')->name('logout');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');
