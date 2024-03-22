<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\PdfMaterialController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\PTNumbersGameController;
use App\Http\Controllers\showAllLanguageGamesController;
use App\Http\Controllers\NumbersFormController;
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

Route::get('/', function () {
    return view('index'); 
})->name('home');


Route::get('/all_language_game', [ShowAllLanguageGamesController::class, 'index'])->name('game.languages');

// All Games
Route::get('/games_tutorials', [ActivityController::class, 'index'])->name('games.all');


//games
Route::get('/numbers', [GamesController::class, 'showNumbersGame'])->name('play.numbers');

// Add a new route for the Portuguese numbers game
Route::get('/numbers_pt', [PTNumbersGameController::class, 'showNumbersGame'])->name('play.numbers.pt');


//Form
Route::get('/numbers_form', function () {
    return view('forms.numbers_form');
})->name('show_numbers_form');


// New route for form submission
Route::post('/numbers_form', [NumbersFormController::class, 'store'])->name('store_numbers_form');





//Profile_panel
Route::get('/profile_panel', function () {
    return view('profile.profile_panel');
})->middleware('auth')->name('profile.profile.panel');






Route::get('/materials', [PdfMaterialController::class, 'index'])->name('materials.materials');




// All Blogs - Updated to use BlogPostsController
Route::get('/blog_posts', [BlogPostsController::class, 'index'])->name('blog.all');

// Single Blog Post
Route::get('/blog_post/{id}', function ($id) { // Adjusted the route to avoid conflict with other routes
    return view('blog.blog_post', ['id' => $id]);
})->name('blog.post');

// Create Blog Post Form
Route::get('/blog_form', function () {
    return view('blog.create_post_form');
})->name('blog.create_form');


// Admin Panel - Protected by middleware
Route::get('/profile/admin_panel', function () {
    return view('profile.admin_panel');
})->middleware('auth', 'role:admin')->name('admin.panel');



//auth
 Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    // Routes accessible only to admin users
    Route::get('/admin_panel', [AdminController::class, 'adminPanel'])->name('admin.panel');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
