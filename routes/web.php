<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\LayananController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', function () {return view('pages.about');})->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// CRUD layanan
Route::resource('layanans', LayananController::class);
