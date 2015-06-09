<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Diary;

Route::model('diary', 'App\Diary');

Route::get('/', 'AppController@home');

Route::get('/diary', 'DiaryController@index');

Route::get('/diary/create', 'DiaryController@create');

Route::post('/diary/create', 'DiaryController@store');

Route::get('/diary/edit/{diary}', 'DiaryController@edit');

Route::post('/diary/update', 'DiaryController@update');

Route::get('/diary/delete/{diary}', 'DiaryController@delete');

Route::post('/diary/destroy', 'DiaryController@destroy');

Route::get('/diary/{diary}', 'DiaryController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
