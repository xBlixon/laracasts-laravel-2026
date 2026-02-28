<x-layout>
    <form method="POST" action="/quote/{{ $quote->id }}">
        @csrf
        @method('PATCH')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Edit Quote</legend>

            <label class="label">Quote</label>
            <textarea type="text" class="textarea h-24" name="text" placeholder="Tweak your poetry as you wish!"
            >{{$quote->text}}</textarea>

            <div class="card-actions justify-end mr-auto">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="submit" form="delete-quote" class="btn btn-neutral" data-test="delete-button">Delete</button>
            </div>
        </fieldset>
    </form>

    <form method="POST" action="/quote/{{$quote->id}}" id="delete-quote">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
