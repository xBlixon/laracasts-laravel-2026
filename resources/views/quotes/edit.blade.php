<x-layout>
    <form method="POST" action="/quote/{{ $quote->id }}">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <label for="text" class="block text-sm/6 font-medium text-white">Send a quote!</label>
            <div class="mt-2">
                <textarea id="text" name="text" rows="3"
                          class="textarea w-full @error('text') textarea-error @enderror"
                >{{ $quote->text }}</textarea>
                <x-forms.error name="text"/>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Show off your poetry!</p>
        </div>
        <div class="mt-3 flex items-center gap-x-2">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="submit" form="delete-quote" class="btn btn-neutral">Delete</button>
        </div>
    </form>

    <form method="POST" action="/quote/{{$quote->id}}" id="delete-quote">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
