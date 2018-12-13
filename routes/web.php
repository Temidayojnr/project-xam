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
    return view('welcome');
});

Route::get('/questions', 'QuestionsController@index')->name('index');

Route::get('questions/create', 'QuestionsController@create')->name('create');

Route::post('questions/store', 'QuestionsController@store')->name('store');

Route::put('/questions/{id}', 'QuestionsController@update')->name('updateq');

Route::get('/questions/record', 'QuestionsController@store_records')->name('record');

Route::get('/questions/{id}', 'QuestionsController@destroy')->name('delete');

Route::post('/test', 'QuestionsController@test');

Route::get('quiz', 'QuestionsController@quizes')->name('quiz');

Route::get('show_quiz', 'QuestionsController@show_quiz')->name('showquiz');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
