@php
    $dateObj = new DateTime($post->created_at);
    $date = $dateObj->format('F d, Y');
@endphp
<x-layout>
    <x-slot:heading>View Post</x-slot:heading>
    <div class="space-y-1 mb-5">
        <div class="text-3xl text-indigo-600">{{$post->title}}</div>
        <div class="text-sm italic">Posted By <span class="text-ibrohim">{{$post->user->name}}</span></div>
        <div class="text-sm">{{$date}}</div>
        <div><img src="{{asset('storage/'.$post->image)}}" class="w-80 md:w-[350px]" alt="{{$post->title}} post image"></div>
        <div class="text-lg pt-5">{!! $post->content !!}</div>
    </div>
    <div class="category mb-10 text-xl text-ibrohim">Post Category: {{$post->category->category}}</div>
    <div class="recent-post mb-10">
        <x-page-heading>Recent Posts</x-page-heading>
        @foreach ($recent as $recents )
        <x-recent-card class="px-0 bg-gray-100 mt-5" :blog="$recents"></x-recent-card>
        @endforeach
    </div>

    <x-page-heading>Comment Section</x-page-heading>
    @foreach ($post->comment as $comment)
    <x-comment-card class="mt-5" :comment="$comment"></x-comment-card>    
    @endforeach
    
    <x-comment-form :comment="$post"></x-comment-form>
</x-layout>