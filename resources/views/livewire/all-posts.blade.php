<div>
    <x-slot:heading>View All Posts</x-slot:heading>
    <x-author.each-post-card-layout :user="$user"></x-author.each-post-card-layout>
    <x-loading></x-loading>
</div>
