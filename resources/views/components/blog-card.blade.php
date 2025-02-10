@props(['blog'])

@foreach ($blog as $blogs)
    @php
        $dateObj = new DateTime($blogs->created_at);
        $date = $dateObj->format('F d, Y');
        $slugDate = $dateObj->format('m-d-Y');

        $blogtitle = explode(' ', $blogs->title);
        $blogslug = '';
        foreach ($blogtitle as $value) {
            $blogslug .= $value . '-';
        }
        $blogslug = trim($blogslug, '-');
    @endphp
    <div {{ $attributes->merge(['class' => 'sm:px-6 lg:px-2 py-2 rounded-md shadow-md flex space-x-3 mb-2']) }}>
        <div class="self-start md:self-center pl-1"><a
                href="/post/{{ $blogs->id }}/{{ $slugDate }}/{{ $blogslug }}"><img
                    src="{{ asset('storage/' . $blogs->image) }}"
                    class="min-w-[180px] max-w-[180px] h-[180px] md:max-w-[250px] md:h-[250px]" alt=""></a></div>
        <div>
            <div class="blog-date italic text-black-800">{{ $date }}</div>
            <div><a href="/post/{{ $blogs->id }}/{{ $slugDate }}/{{ $blogslug }}"
                    class="text-3xl text-indigo-500">{{ ucwords($blogs->title) }}</a></div>
            <div class="author text-indigo-500 font-bold"><span class="text-ibrohim italic font-normal">Posted By</span>
                {{ $blogs->user->name }}</div>
            <div class="blog-content">
                {!! Str::limit($blogs->content, 190) !!}..
            </div>
            <a href="/post/{{ $blogs->id }}/{{ $slugDate }}/{{ $blogslug }}"
                class="text-red-500 font-bold">Read More <span>&RightArrow;</span></a>
        </div>
    </div>
@endforeach
