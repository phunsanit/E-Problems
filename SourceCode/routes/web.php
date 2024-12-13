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
    $commnds = [
        //clear
        'cache:clear',
        'clear-compiled',
        'optimize:clear',
        'schedule:clear-cache',
        //add
        'cache:table',
        'cache:cache',
        'lang:publish',
        'optimize',
        //infotmation
        'about',
        'route:list',
    ];
    $output = '<dl>';

    foreach ($commnds as $command) {
        Artisan::call($command);
        $output = Artisan::output();
        $output .= "<dt>{$command} Output:</dt><dd>{$output}</dd>";
    }
    $output = '</dl>';

    return $output;
});

Route::controller(TicketsController::class)->group(function () {
    Route::delete('/tickets/{id}', 'destroy');
    Route::get('/tickets', 'index');
    Route::get('/tickets/{id}', 'show');
    Route::post('/tickets', 'store');
    Route::put('/tickets/{id}', 'update');
});