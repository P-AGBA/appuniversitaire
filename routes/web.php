<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\UniversityController;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('listeuniv');
});

/*Route::get('/dashboard', [homeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::get('/home',[\App\Http\Controllers\homeController::class,"home"]);

Route::get('/univ1', [UniversityController::class,"show"])->name('univ1');

    // Vos routes accessibles uniquement par les administrateurs
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard/universites', [AdminController::class, 'create'])->name('universities');
    Route::get('/admin/dashboard/utilisateurs', [AdminController::class, 'utilisateurs'])->name('util');
    Route::post('/admin/dashboard/universites/universite', [AdminController::class, 'store'])->name('Admin.store');
    Route::get('/admin/dashboard/Liste_universites', [AdminController::class, 'index'])->name('Liste');



// web.php

Route::get('/comments/history', [UserController::class, 'showCommentHistory'])->name('comments.history');
Route::get('/comments/history', [CommentController::class, 'history'])->name('comments.history');
Route::get('/comment/{id}/edit', 'CommentController@edit')->name('comment.edit');
Route::delete('/comment/{id}', 'CommentController@destroy')->name('comment.destroy');

Route::get('/ratings/history', [UserRatingController::class, 'index'])->name('ratings.history');
Route::get('/comments/history', [CommentController::class, 'history'])
    ->middleware(['auth'])
    ->name('comments.history');


Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::post('/universities/{university}/comment', [UniversityController::class, 'comment'])->name('universities.comment');
// web.php

Route::get('/universities/comments', [UniversityController::class, 'showComments'])->name('universities.comments');

// web.php
Route::get('/jody', function () {
    return view('jody');
})->name('jody');
// web.php
Route::get('/jody', [UniversityController::class, 'showNotesAndComments'])->name('jody');
// web.php
Route::get('/jody', [UniversityController::class, 'showAverageRatings'])->name('jody');

Route::get('/universities/{id}', [UniversityController::class, 'show'])->name('university.show');
Route::post('/universities/{university}/rate', [UniversityController::class, 'rate'])->name('universities.rate');
Route::get('/dashboard', [UserController::class, '__invoke'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

