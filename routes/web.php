<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home',
    [
    'name' => request('name', "Guest"),
    ]
)->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
