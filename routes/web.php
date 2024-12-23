<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumThreadController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\AuthController; 

// Authentication Routes
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login'); // Login page
    Route::post('login', [AuthController::class, 'postLogin'])->name('login.post'); // Handle login
    Route::get('register', [AuthController::class, 'registration'])->name('register'); // Registration page
    Route::post('register', [AuthController::class, 'postRegistration'])->name('register.post'); // Handle registration
});

// Other Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about']);
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/solution', [SolutionController::class, 'index'])->name('solution');

// Blog Routes
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Forum Routes
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');  
Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');

// Donation Routes
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::post('/donate', [HomeController::class, 'processDonation'])->name('donate.process');

// Search Route - Use the same route for searching blogs and threads
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Locale Setting Route
Route::get('/setlocale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->middleware('localize')->name('setlocale');

// Protected Routes Example
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Use AuthController for logout as well
});

// Resource Routes for Forum and Blogs
Route::resource('forum', ForumThreadController::class);
Route::resource('blogs', BlogController::class);
