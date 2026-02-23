<x-layout>
    <form method="POST" action="/quote">
        @csrf
        <div class="col-span-full">
            <label for="text" class="block text-sm/6 font-medium text-white">Send a quote!</label>
            <div class="mt-2">
                <textarea id="text" name="text" rows="3"
                          class="textarea w-full @error('text') textarea-error @enderror"></textarea>

            </div>
            <x-forms.error name='text'/>
            <p class="mt-3 text-sm/6 text-gray-400">Show off your poetry!</p>
        </div>
        <div class="mt-3 flex items-center gap-x-6">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</x-layout>
