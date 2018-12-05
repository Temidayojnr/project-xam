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

Route::delete('/questions/{id}', 'QuestionsController@destroy')->name('delete');