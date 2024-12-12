<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//tickets frontend
Route::resource('tickets', TicketController::class);