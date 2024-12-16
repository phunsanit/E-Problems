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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

//refresh cache
Route::get('/refresh', function () {
    $commands = [
        //clear,
        'optimize:clear',
        'queue:clear',
        'schedule:clear-cache',

        //add,
        'cache:table',
        'lang:publish',
        'optimize',

        //info
        'about',
        'list',//all commands
        //'route:list',
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

Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::controller(TicketsController::class)->group(function () {
    Route::delete('/tickets/{id}', 'destroy');
    Route::get('/tickets', 'index');
    Route::get('/tickets/{id}', 'show');
    Route::get('/tickets/{id}/edit', 'edit');
    Route::get('/tickets/create', 'create');
    Route::post('/tickets', 'store');
    Route::put('/tickets/{id}', 'update');
});
