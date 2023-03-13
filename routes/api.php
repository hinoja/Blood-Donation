<?php

use App\Http\Controllers\API\front\users\AuthentificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'guest'], function () {
    Route::post('/login', [AuthentificationController::class, 'login']);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthentificationController::class, 'logout']);
});
