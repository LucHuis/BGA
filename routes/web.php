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

//Route::get('/games', 'GamesController@index');
//Route::get('/games/create', 'GamesController@index');
//Route::get('/games', 'GamesController@index');

Route::get('about', function () {
    return view('about');
});


Route::get('users', function () {
    return view('users');
})->middleware('auth');
Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('players', 'playerscontroller@showPlayers')->middleware('auth');


Auth::routes();
Route::get('loginIndex', function () {
return view('loginIndex', compact('user'));
})->middleware('auth');

Route::get('battle/create', 'BattleController@create');
Route::get('battle/battle', 'BattleController@selection');
Route::get('', 'GamesController@index2')->middleware('auth');
Route::get('games', 'GamesController@index')->middleware('auth');
Route::post('games/store', 'GamesController@store');
Route::resource('users','UsersController')->middleware('auth');

Route::resource('games', 'GamesController');
Route::get('battles', 'BattleController@index')->middleware('auth');

Route::get('home', 'HomeController@index')->name('home');
Route::get('logout', 'UsersController@logout');

Auth::routes();


