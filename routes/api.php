<?php

use App\Http\Controllers\API\front\users\AuthentificationController;
use App\Http\Controllers\API\HospitalsController;
use App\Http\Controllers\API\posts\PostController;
use App\Http\Controllers\Api\users\GetEmailController;
use App\Http\Controllers\Api\users\ProfileController;
use App\Http\Controllers\Api\users\updatePasswordController;
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
// Route::group(['middleware' => 'guest'], function () {
// });

// login
Route::post('login', [AuthentificationController::class, 'login']);
// reset password
Route::post('forgotpassword/get/email', GetEmailController::class);
Route::patch('reset-password', updatePasswordController::class);

//all posts
Route::get('posts', PostController::class);

// Hospitals
Route::get('hospitals', HospitalsController::class);

Route::middleware('auth:sanctum')->group(function () {
    // logout
    Route::post('/logout', [AuthentificationController::class, 'logout']);
    // Profile
    Route::get('/user/{id}', [ProfileController::class, 'getProfile']);
});
