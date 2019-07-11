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

Route::get('signup', function (){ return view('pages/register'); });

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

Route::middleware('auth')->group(function (){
    Route::resource('MyQuestions', 'QuestionsController');
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


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('index');
