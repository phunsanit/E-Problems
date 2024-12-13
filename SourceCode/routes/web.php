<?php

use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');

    return view('layouts/main');
});

//refresh cache
Route::get('/refresh', function () {
    //clear
    Artisan::call('cache:clear');
    Artisan::call('clear-compiled');
    Artisan::call('optimize:clear');
    Artisan::call('schedule:clear-cache');

    //add
    Artisan::call('cache:table');
    Artisan::call('lang:publish');
    Artisan::call('optimize');

    return "All caches have been cleared and recreated.";
});

Route::controller(TicketsController::class)->group(function () {
    Route::delete('/tickets/{id}', 'destroy');
    Route::get('/tickets', 'index');
    Route::get('/tickets/{id}', 'show');
    Route::get('/tickets/{id}/edit', 'edit');
    Route::get('/tickets/create', 'create');
    Route::post('/tickets', 'store');
    Route::put('/tickets/{id}', 'update');
});