<?php

use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('reserves.home');
})->name('home');

Route::resource('reserves', ReserveController::class)
    ->parameters(['reserves' => 'reserve'])
    ->only(['index', 'create', 'store', 'show', 'destroy']);
