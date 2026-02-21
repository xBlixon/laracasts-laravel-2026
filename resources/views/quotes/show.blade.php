<x-layout>
    <div class="mt-10">
        <p class="text-xl">{{ $quote->text }}</p>
    </div>
    <div>
        <div class="mt-3 flex items-center gap-x-6">
            <a href="/quote/{{$quote->id}}/edit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Edit
            </a>
        </div>
    </div>
</x-layout>
