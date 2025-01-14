<?php

use App\Http\Controllers\AssetCacheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// only logged in users can access this route
Route::middleware('auth:sanctum')->group(function () {
    Route::get('asset/getSelectOptions', [AssetCacheController::class, 'getSelectOptions']);
});