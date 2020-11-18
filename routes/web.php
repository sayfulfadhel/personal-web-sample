<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'home'])->name('home');
Route::get('/about-me', [BaseController::class, 'aboutMe'])->name('about-me');
Route::get('/portfolio', [BaseController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [BaseController::class, 'blog'])->name('blog');
Route::get('/post', [BaseController::class, 'post'])->name('post');
Route::get('/contact', [BaseController::class, 'contact'])->name('contact');
