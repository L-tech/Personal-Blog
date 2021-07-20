<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'home'])->name('homepage');
Route::get('/about', [PagesController::class, 'about'])->name('aboutpage');
Route::get('/articles', [PagesController::class, 'articles'])->name('articlespage');
Route::get('/blog/{slug}', [PagesController::class, 'blogDetail'])->name('blogdetail');
Route::get('/category/{slug}', [PagesController::class, 'category'])->name('categorypage');
Route::get('/contact', function () {
    return view('contact');
});
// Disable registration feature
Route::get('/register', function () {
    return redirect('/');
});
Route::get('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('adminlogout');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('admin/blog', PostController::class);
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/comment', CommentController::class);


});

