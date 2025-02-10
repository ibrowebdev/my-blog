@props(['comment'])
    
<div {{$attributes->merge(['class'=>'sm:px-6 lg:px-4 py-2 rounded-md shadow-md flex space-x-3 bg-gray-100'])}}>
    <div class="self-start md:self-center"><a href=""><img src="{{asset('storage/postimages/fimg.png')}}" class="w-[100px] md:w-[100px]" alt=""></a></div>
    <div>
    <div class="text-indigo-500 font-bold"><span class="text-ibrohim italic font-normal">Comment By</span> Anonymous</div>
    <div class="">
        {{$comment->comment}}
    </div>
</div>
</div>
