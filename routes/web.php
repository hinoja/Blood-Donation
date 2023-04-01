<?php

use App\Http\Controllers\Extra\LangController;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// PROFILE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//----------------------------FRONT------------------------------

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Home
Route::get('/', [HomerController::class, 'index'])->name('home');
// Contact-us
Route::view('contact-us', 'front.contact-us')->name('front.contact');

// --------------------------ADMIN--------------------------
Route::middleware('auth', 'admin')->prefix('admin')->name('admin.')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    // CONTACTS
    Route::view('contacts/index', 'admin.contacts.index')->name('contacts');
    // USERS
    Route::view('users/index', 'admin.users.index')->name('users.index');
    // POSTS
    Route::view('posts/index', 'admin.posts.index')->name('posts.index');

});

// ----------------------GENERAL------------------------------------
Route::get('lang/{locale?}', LangController::class)->name('lang');

require __DIR__.'/auth.php';
