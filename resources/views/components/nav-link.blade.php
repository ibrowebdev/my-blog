@props(['page'=>false])

<a class="{{$page ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-sm px-3 py-2 text-lg font-medium" 
    aria-current="{{$page ? "page" : "false"}}" {{$attributes}}>
    
    {{$slot}}
</a>