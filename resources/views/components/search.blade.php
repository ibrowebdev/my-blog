<div class="flex justify-center space-x-2 mb-20">
    <form action="/search" method="get">
        <label for="post">Search for your posts:</label>
        <input wire:model.live="search" type="text" name="post" class="border border-blue-800">
        {{-- <button class="bg-indigo-400 px-3 text-lg">search</button> --}}
    </form>
</div>