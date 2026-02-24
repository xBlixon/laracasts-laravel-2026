<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = auth()->user()->quotes;

        return view('quotes.index', [
            'quotes' => $quotes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuoteRequest $request)
    {
        $text = request('text');
        auth()->user()->quotes()->create([
            'text' => $text
        ]);
        return redirect('/quote');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        return view('quotes.show', [
            'quote' => $quote
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        return view('quotes.edit', [
            'quote' => $quote
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuoteRequest $request, Quote $quote)
    {
        $quote->update([
            'text' => request('text')
        ]);

        return redirect("/quote/{$quote->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect('/quote');
    }
}
