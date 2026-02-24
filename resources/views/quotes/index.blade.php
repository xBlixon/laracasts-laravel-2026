<x-layout>
    @if($quotes->count())
        <a href="/quote/create" class="mt-5 block">Make a new quote</a>
        <div class="mt-6">
            <h2 class="font-bold text-2xl">Quotes</h2>
            <div class="mt-2 grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach($quotes as $quote)
                    <x-quote-card href="/quote/{{$quote->id}}/edit">
                        {{ $quote->text }}
                    </x-quote-card>
                @endforeach
            </div>
        </div>
    @else
        <h1 class="text-2xl mt-5">No quotes exist.
            <a href="/quote/create" class="underline accent-blue-300"
            >Start your poetic journey!</a>
        </h1>
    @endif
</x-layout>
