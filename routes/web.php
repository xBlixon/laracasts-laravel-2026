<?php

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    $quotes = Quote::all();
    return view('quote',
        [
            'quotes' => $quotes
        ]);
})->name('quote');

Route::post('/quote', function () {
    $text = request('quote');
    Quote::create([
        'text' => $text
    ]);
    return redirect('/quote');
})->name('quote_post');
