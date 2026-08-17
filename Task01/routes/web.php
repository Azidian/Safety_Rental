<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/clients', 'App\Http\Controllers\ClientController@index')->name('client.index');
Route::get('/clients/create', 'App\Http\Controllers\ClientController@create')->name('client.create');
Route::post('/clients/save', 'App\Http\Controllers\ClientController@save')->name('client.save');
Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show')->name('client.show');
Route::delete('/clients/{id}/delete', 'App\Http\Controllers\ClientController@delete')->name('client.delete');
Route::get('/locale/{lang}', 'App\Http\Controllers\LocaleController@switch')->name('locale.switch');
