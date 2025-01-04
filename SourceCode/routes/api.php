<?php

use App\Http\Controllers\AssetCacheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//for all users
Route::get('asset/selectOptions', [AssetCacheController::class, 'SelectOptions']);