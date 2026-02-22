<x-layout>
    @if($quotes->count())
        <a href="/quote/create" class="mt-5 block">Make a new quote</a>
        <div class="mt-6">
            <h2 class="font-bold text-2xl">Quotes</h2>
            <ul class="mt-2">
                @foreach($quotes as $quote)
                    <li class="mt-1">
                        <a href="/quote/{{$quote->id}}/edit">{{$quote->text}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <h1 class="text-2xl mt-5">No quotes exist. <a href="/quote/create" class="underline accent-blue-300">Be the pioneer!</a></h1>
    @endif
</x-layout>
