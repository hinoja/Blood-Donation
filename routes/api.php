<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HospitalsController;
use App\Http\Controllers\API\posts\PostController;
use App\Http\Controllers\Api\Users\ProfileController;
use App\Http\Controllers\Api\Users\GetEmailController;
use App\Http\Controllers\Api\Users\updatePasswordController;
use App\Http\Controllers\API\front\users\AuthentificationController;
use App\Http\Controllers\API\front\users\RegisterController;
use App\Http\Controllers\API\UserAppointmentsController;

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
// Route::post('register', [AuthentificationController::class, 'login']);
Route::post('login', [AuthentificationController::class, 'login']);
// register
Route::post('register/donor', [AuthentificationController::class, 'register']);

Route::get('register/cities', [AuthentificationController::class, 'cities']);
Route::get('register/states', [AuthentificationController::class, 'states']);
// reset password
Route::post('forgotpassword/get/email', GetEmailController::class);
Route::post('reset-password', updatePasswordController::class);

//all posts
Route::get('posts', PostController::class);

// Hospitals
Route::get('hospitals', HospitalsController::class);

// Normaly requiert to authentificate
Route::get('user/{id}', [ProfileController::class, 'getProfile']);
Route::get('user/appointments/{userid}', [UserAppointmentsController::class, 'appointments']);
Route::delete('delete/user/{id}', [AuthentificationController::class, 'destroy']);
Route::post('appointment/store', [UserAppointmentsController::class, 'store']);



Route::middleware('auth:sanctum')->group(function () {
    // logout
    Route::post('/logout', [AuthentificationController::class, 'logout']);
    // Profile
});
