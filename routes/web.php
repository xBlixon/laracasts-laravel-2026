<?php

use App\Http\Controllers\QuoteController;
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

Route::get('/quote', [QuoteController::class, 'index'])->name('quote');
Route::get('/quote/create', [QuoteController::class, 'create'])->name('quote_create');
Route::get('/quote/{quote}', [QuoteController::class, 'show'])->name('quote_single');
Route::get('/quote/{quote}/edit', [QuoteController::class, 'edit'])->name('quote_edit');
Route::patch('/quote/{quote}', [QuoteController::class, 'update'])->name('quote_update');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote_post');
Route::delete('/quote/{quote}', [QuoteController::class, 'destroy'])->name('quote_destroy');
