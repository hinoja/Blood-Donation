<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Extra\LangController;
use App\Http\Livewire\Admin\Posts\EditComponentPost;
use App\Http\Controllers\Admin\users\UsersController;
use App\Http\Controllers\Admin\posts\PostAdminController;

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
//registerHospital
Route::view('register/Hospital', 'auth.registerHospital')->name('front.register.hospital');
// Contact-us
Route::view('contact-us', 'front.contact-us')->name('front.contact');
// Blog
Route::view('blog/index', 'front.blog.index')->name('front.blog.index');
Route::get('blog/{post:slug}', [PostController::class, 'show'])->name('front.blog.show');




// --------------------------ADMIN--------------------------
Route::middleware('auth', 'admin')->prefix('admin')->name('admin.')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    // CONTACTS
    Route::view('contacts/index', 'admin.contacts.index')->name('contacts');
    // USERS
    Route::prefix('users')->name('users.')->controller(UsersController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::patch('status/{user}', 'updateStatus')->name('status');
    });
    // Route::view('users/index', 'admin.users.index')->name('users.index');
    // Route::get('users/index', 'admin.users.index')->name('users.index');
    // POSTS
    Route::view('posts/index', 'admin.posts.index')->name('posts.index');
    Route::view('post/add', 'admin.posts.add')->name('post.add');
    Route::get('post/add', [PostAdminController::class, 'index'])->name('post.add');
    // Route::post('post/store', [PostAdminController::class, 'store'])->name('post.store');
    // Route::get('post/edit/{post:slug}', [PostController::class, 'edit'])->name('post.edit');
    // Route::patch('post/update/{post}', [PostController::class, 'update'])->name('post.update');
    // Route::view('post/edit/{post}', 'admin.posts.edit')->name('post.edit');
    Route::get('post/edit/{post:slug}', EditComponentPost::class)->name('post.edit');
});

// ----------------------GENERAL------------------------------------
Route::get('lang/{locale?}', LangController::class)->name('lang');
// Route::get('lang/{locale?}', LangController::class)->name('lang');

require __DIR__ . '/auth.php';
