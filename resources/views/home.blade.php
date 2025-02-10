<x-layout>
    <x-slot:heading>Latest Posts</x-slot:heading>
    <x-search></x-search>
    <x-blog-card :blog="$post"></x-blog-card>
    {{$post->links()}}
    <x-newsletter></x-newsletter>
</x-layout>