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


Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');

Route::get('/admin/questions', 'Admin\QuestionController@index')->name('admin.questions.index');
Route::get('/admin/deleteRequests', 'Admin\QuestionController@deleteRequests')->name('admin.questions.deleteRequests');
Route::get('/admin/questions/create', 'Admin\QuestionController@create')->name('admin.questions.create');
Route::get('/admin/questions/{id}', 'Admin\QuestionController@show')->name('admin.questions.show');
Route::post('/admin/questions/store', 'Admin\QuestionController@store')->name('admin.questions.store');
Route::get('/admin/questions/{id}/edit', 'Admin\QuestionController@edit')->name('admin.questions.edit');
Route::post('/admin/questions/{id}', 'Admin\QuestionController@update')->name('admin.questions.update');
Route::delete('/admin/questions/{id}', 'Admin\QuestionController@destroy')->name('admin.questions.destroy');

Route::get('/user/questions', 'User\QuestionController@index')->name('user.questions.index');
Route::get('/user/questions/create', 'User\QuestionController@create')->name('user.questions.create');

Route::get('/user/questions/{id}', 'User\QuestionController@show')->name('user.questions.show');
Route::post('/user/questions/store', 'User\QuestionController@store')->name('user.questions.store');
Route::get('/user/questions/{id}/edit', 'User\QuestionController@edit')->name('user.questions.edit');
Route::post('/user/questions/{id}', 'User\QuestionController@update')->name('user.questions.update');
Route::put('/user/questions/{id}', 'User\QuestionController@requestDelete')->name('user.questions.requestDelete');
