<?php

use App\Http\Controllers\TicketsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
/*
Route::middleware([
'auth:sanctum',
config('jetstream.auth_session'),
'verified',
])->group(function () {
Route::get('/dashboard', function () {
return Inertia::render('Dashboard');
})->name('dashboard');
});
 */

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
});

//refresh cache
Route::get('/refresh', function () {
    //php artisan optimize:clear
    $commands = [

        //clear
        'auth:clear-resets',
        'optimize:clear',
        'queue:clear',
        'schedule:clear-cache',

        //add
        'cache:table',
        'lang:publish',
        'optimize',
        'stub:publish',
        //'ziggy:generate',

        //infomation
        'about',
        //'db:show',
        'env',
        'list', //all commands
        'package:discover',
        //'route:list',//all routes but must be in console only
    ];

    $output = '<!DOCTYPE html><html lang="en"><head><title>refresh</title></head><body><dl>';

    foreach ($commands as $command) {
        if (Artisan::call($command) === 0) {
            $results = Artisan::output();
            $results = explode("\n", $results);
            $results = implode("</dd><dd>", $results);
            $output .= '<dt>php artisan ' . $command . '</dt><dd>' . $results . '</dd>';
        } else {
            $output .= '<dt>php artisan ' . $command . '</dt><dd><h2>Error executing command</h2></dd>';
        }
    }

    $output .= '</dl><br>All caches have been cleared and recreated.</body></html>';

    return response($output)->header('Content-Type', 'text/html');
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
