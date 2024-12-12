<?php

use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//refresh cache
Route::get('/refresh', function () {
    //clear
    Artisan::call('cache:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Artisan::call('schedule:clear-cache');
    Artisan::call('view:clear');

    //add
    Artisan::call('cache:table');
    Artisan::call('cache:cache');
    Artisan::call('config:cache');
    Artisan::call('event:cache');
    Artisan::call('lang:publish');
    Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('view:cache');

    return "All caches have been cleared and recreated.";
});

Route::controller(TicketsController::class)->group(function () {
    Route::delete('/tickets/{id}', 'destroy');
    Route::get('/tickets', 'index');
    Route::get('/tickets/{id}', 'show');
    Route::post('/tickets', 'store');
    Route::put('/tickets/{id}', 'update');
});