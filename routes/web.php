<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::resource('/posts', PostController::class);

Route::view('/about', 'about')->name('about');
