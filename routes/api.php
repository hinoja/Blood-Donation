<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\posts\PostController;
use App\Http\Controllers\Api\users\ProfileController;
use App\Http\Controllers\Api\users\GetEmailController;
use App\Http\Controllers\Api\users\updatePasswordController;
use App\Http\Controllers\API\front\users\AuthentificationController;

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
// Route::group(['middleware' => 'guest'], function () {
// });

Route::post('/login', [AuthentificationController::class, 'login']);

// reset password
Route::post('forgotpassword/get/email', GetEmailController::class);
Route::post('reset-password', updatePasswordController::class);


Route::get('/posts', PostController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthentificationController::class, 'logout']);
    Route::get('/user/{id}', [ProfileController::class, 'getProfile']);
});
