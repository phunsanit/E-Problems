<?php

use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('layouts/main');
});

//refresh cache
Route::get('/refresh', function () {
    $commands = [
        //clear,
        'cache:clear',
        'clear-compiled',
        'optimize:clear',
        'schedule:clear-cache',

        //add,
        'cache:table',
        'lang:publish',
        'optimize',

        //info
        'about',
        'route:list',
    ];
    $output = '<dl>';

    foreach ($commands as $command) {
        Artisan::call($command);
        $results = Artisan::output();

        $results = explode("\n", $results);
        $results = implode("</dd><dd>", $results);

        $output .= '<dt>php artisan ' . $command . '</dt><dd>' . $results . '</dd>';
    }
    $output .= '</dl><br>All caches have been cleared and recreated.';

    return $output;
});

Route::controller(TicketsController::class)->group(function () {
    Route::delete('/tickets/{id}', 'destroy');
    Route::get('/tickets', 'index');
    Route::get('/tickets/{id}', 'show');
    Route::post('/tickets', 'store');
    Route::put('/tickets/{id}', 'update');
});
