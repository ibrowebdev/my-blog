@props(['heading', 'get'])
<div {{ $attributes->merge(['class' => 'px-2 lg:px-4 py-2 rounded-md shadow-md flex space-x-3 flex justify-between']) }}>
    <div class="">
        <div class="text-3xl text-black-800">
            <h1>{{ $heading }}</h1>
        </div>
        <div class="text-xl">You have a total of {{ count($get->post) }} blogs posted</div>
    </div>
    <div class="self-center"><a href="/author/all-post" class="bg-blue-800 p-2 rounded text-white">View Posts</a></div>
</div>
