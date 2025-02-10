<x-layout>
    <x-slot:heading>Search Results For: {{request('post')}}</x-slot:heading>
    <x-search></x-search>
    @if (count($posts)>0)
   
    <x-blog-card :blog="$posts"></x-blog-card>
    @elseif (count($posts)<= 0)
    <div class="text-center text-4xl text-red-800 mb-20 pb-20">No result for the search!!</div> 
    @endif

    {{-- {{count($posts)}} --}}
</x-layout>