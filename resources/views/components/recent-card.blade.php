@props(['blog'])
@php
    $dateObj = new DateTime($blog->created_at);
    $date = $dateObj->format('F d, Y');
    $slugDate = $dateObj->format('m-d-Y');
    $blogtitle = explode(' ', $blog->title);
    $blogslug = '';
    foreach ($blogtitle as $value) {
        $blogslug .= $value . '-';
    }
    $blogslug = trim($blogslug, '-');
@endphp
<div {{ $attributes->merge(['class' => 'sm:px-6 lg:px-4 py-2 rounded-md shadow-md flex space-x-3']) }}>
    <div class="self-start md:self-center pl-1"><a
            href="/post/{{ $blog->id }}/{{ $slugDate }}/{{ $blogslug }}"><img
                src="{{ asset('storage/' . $blog->image) }}"
                class="min-w-[180px] max-w-[180px] h-[180px] md:max-w-[150px] md:h-[150px]" alt=""></a></div>
    <div>
        <div class="blog-date italic text-black-800">{{ $date }}</div>
        <div><a href="/post/{{ $blog->id }}/{{ $slugDate }}/{{ $blogslug }}"
                class="text-xl md:text-3xl text-indigo-500">{{ ucwords($blog->title) }}</a></div>
        <div class="author text-indigo-500 font-bold"><span class="text-ibrohim italic font-normal">Posted By</span>
            {{ $blog->user->name }}</div>
        <div class="blog-content">
            {!! Str::limit($blog->content, 150) !!}..
        </div>
        <a href="/post/{{ $blog->id }}/{{ $slugDate }}/{{ $blogslug }}"
            class="text-red-500 font-bold">Read More <span>&RightArrow;</span></a>
    </div>
</div>
