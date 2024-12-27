<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
        'route:list',//may fail if there are errors in routes
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

Route::resource('tickets', TicketsController::class);

require __DIR__.'/auth.php';