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

Route::get('/', function (Request $request) {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::resource('/user', 'UserController');
Route::resource('/submission', 'SubmissionController');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/api/users', 'UserController@dataTable')->name('api.users');
});
