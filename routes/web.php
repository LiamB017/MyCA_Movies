<?php

use Illuminate\Support\Facades\Route;
// Importing the MovieController 
use App\Http\Controllers\User\MovieController as UserMovieController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

//These are the routes for user functionality
Route::get('/user/movies/', [UserMovieController::class, 'index'])->name('user.movies.index');
Route::get('user/movies/{id}', [UserMovieController::class, 'show'])->name('user.movies.show');
