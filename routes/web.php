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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('home','HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
 	Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::resource('users', 'UsersController')->except(['show', 'index']);
    Route::match(['get', 'post'], 'users', 'UsersController@index')->name('users.index');
//    Route::put('users/{id}', 'UsersController@update')->name('users.update');
//    Route::get('users/{id}/edit', 'UsersController@edit')->name('users.edit');
});
Auth::routes();

Route::resource('/question', 'QuestionDetailsController');

Route::resource('answerofinterview', 'AnswerOfInterviewController');