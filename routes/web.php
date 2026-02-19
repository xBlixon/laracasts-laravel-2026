<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',
        [
            'name' => request('name', "Guest"),
        ]);
}

)->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/quote', function () {
    $myQuotes = session()->get('quotes', []);
    return view('quote',
        [
            'myQuotes' => $myQuotes
        ]);
})->name('quote');

Route::post('/quote', function () {
    $quote = request('quote');
    session()->push('quotes', $quote);
    return redirect('/quote');
})->name('quote_post');
