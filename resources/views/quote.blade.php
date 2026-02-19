<x-layout>
    <form method="POST" action="/quote">
        @csrf
        <div class="col-span-full">
            <label for="quote" class="block text-sm/6 font-medium text-white">Send a quote!</label>
            <div class="mt-2">
                <textarea id="quote" name="quote" rows="3"
                          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Show off your poetry!</p>
        </div>
        <div class="mt-3 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>
    <div class="mt-6">
        <h2 class="font-bold text-2xl">My quotes</h2>
        <ul class="mt-2">
            @foreach($myQuotes as $quote)
                <li class="mt-1">{{$quote}}</li>
            @endforeach
        </ul>
    </div>
</x-layout>
