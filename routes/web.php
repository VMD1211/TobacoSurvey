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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UsersController')->except(['show', 'index']);

Route::match(['get', 'post'], 'users', 'UsersController@index')->name('users.index');

Route::get('home','HomeController@index')->name('home');

Route::resource('/question', 'QuestionDetailsController');

Route::resource('/answerofinterview', 'AnswerOfInterviewController');

//Route::group(['middleware' => ['auth']], function () {
// 	Route::get('/', function () {
//        return view('welcome');
//    })->name('home');
//    Route::resource('users', 'UsersController')->except(['show', 'index']);
//    Route::match(['get', 'post'], 'users', 'UsersController@index')->name('users.index');
//    Route::put('users/{id}', 'UsersController@update')->name('users.update');
//    Route::get('users/{id}/edit', 'UsersController@edit')->name('users.edit');
//});

