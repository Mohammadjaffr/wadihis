<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [UserController::class, 'index'])->name('students');
Route::get('/page404', [HomeController::class, 'page404'])->name('page404'); 
Route::get('/lineChart', [HomeController::class, 'lineChart'])->name('lineChart');
Route::get('/barChart', [HomeController::class, 'barChart'])->name('barChart');
Route::get('/alerts', [HomeController::class, 'alerts'])->name('alerts');
Route::get('/avatars', [HomeController::class, 'avatar'])->name('avatars');
Route::get('/badge', [HomeController::class, 'badge'])->name('badge');
Route::get('/basic_tables', [HomeController::class, 'basic_tables'])->name('basic_tables');
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');
Route::get('/buttons', [HomeController::class, 'buttons'])->name('buttons');
Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');
Route::get('/form_elements', [HomeController::class, 'form_elements'])->name('form_elements');
Route::get('/images', [HomeController::class, 'images'])->name('images');
Route::get('/Profile', [HomeController::class, 'Profile'])->name('Profile');
Route::get('/signin', [HomeController::class, 'signin'])->name('signin');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/videos', [HomeController::class, 'videos'])->name('videos');

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';