<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
  return view('welcome');
});

Route::get(md5('/all-contact'), 'ContactController@index')->name('all.contacts');
Route::get('/insert-data', 'ContactController@create');
Route::post('/data-added', 'ContactController@store');
Route::get('/delete-contact/{id}', 'ContactController@delete');
Route::get('/edit-contact/{id}', 'ContactController@edit');
Route::post('/update-contact/{id}', 'ContactController@update');
Route::get('/view-contact/{id}', 'ContactController@show');
