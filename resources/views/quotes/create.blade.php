<x-layout>
    <form method="POST" action="/quote">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">New Quote</legend>

            <label class="label">Quote</label>
            <textarea type="text" class="textarea h-24" name="text" placeholder="Show off your poetry!"
            ></textarea>

            <button class="btn btn-neutral mt-4">Publish</button>
        </fieldset>
    </form>
</x-layout>
