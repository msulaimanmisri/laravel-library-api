<?php

use App\Http\Controllers\Api\v1\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
 */

/**
 * Public Route
 */
Route::prefix('/v1')->group(function () {
    Route::apiResource('/login', LoginController::class)->only('index', 'store');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });