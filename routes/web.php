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
    return view('quotes.index', [
            'quotes' => $quotes
        ]);
})->name('quote');

Route::get('/quote/{quote}', function (Quote $quote) {
    return view('quotes.show', [
        'quote' => $quote
    ]);
})->name('quote_single');

Route::get('/quote/{quote}/edit', function (Quote $quote) {
    return view('quotes.edit', [
        'quote' => $quote
    ]);
})->name('quote_edit');

Route::patch('/quote/{quote}', function (Quote $quote) {
    $quote->update([
        'text' => request('text')
    ]);

    return redirect("/quote/{$quote->id}");
})->name('quote_update');

Route::post('/quote', function () {
    $text = request('text');
    Quote::create([
        'text' => $text
    ]);
    return redirect('/quote');
})->name('quote_post');

Route::delete('/quote/{quote}', function (Quote $quote) {
    $quote->delete();
    return redirect('/quote');
});
