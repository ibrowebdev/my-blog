@props(['user'])
@foreach ($user->post->sortByDesc('created_at') as $posts)
    @php
        $dateObj = new DateTime($posts->created_at);
        $date = $dateObj->format('F d, Y');
        $slugDate = $dateObj->format('m-d-Y');

        $blogtitle = explode(' ', $posts->title);
        $blogslug = '';
        foreach ($blogtitle as $value) {
            $blogslug .= $value . '-';
        }
        $blogslug = trim($blogslug, '-');

        $id = $posts->id;
    @endphp

    <div wire:key="{{ $posts->id }}"
        {{ $attributes->merge(['class' => 'px-2 lg:px-4 py-4 rounded-md shadow-md flex space-x-3 flex justify-between dark:bg-gray-950/95']) }}>
        <div class="">
            <div class="text-3xl text-black-800">
                <h1>{{ ucwords($posts->title) }}</h1>
            </div>
            <div>
                <p>{!! Str::limit($posts->content, 100) !!}..</p>
            </div>
        </div>
        <div class="self-center flex flex-col md:flex-row space-x-0 md:space-x-2 space-y-2 md:space-y-0">
            <a wire:navigate href="/author/post/{{ $posts->id }}/edit"
                class="p-2 rounded text-white bg-dardaa text-center">Edit</a>
            <a wire:navigate href="/post/{{ $posts->id }}/{{ $slugDate }}/{{ $blogslug }}"
                class="bg-blue-800 p-2 rounded text-white text-center">Preview</a>
            <button wire:confirm="Are you sure you want to delete this job?" wire:click="delete({{ $posts->id }})"
                class="bg-ibrohim p-2 rounded text-white" type="submit">Delete</button>
        </div>
    </div>
@endforeach
