<div>
    <x-slot:heading>Edit Post: {{$post->title}}</x-slot:heading>
    <div class="flex flex-col justify-center px-20 py-1 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Edit Your Blog</h2>
          <p class="text-center text-sm">Get in control of your posts</p>
        </div>
        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="/author/post/{{$post->id}}/edit" method="POST" enctype="multipart/form-data">
            @csrf
            @method("patch")
            <div>
              <label for="title" class="block text-sm/6 font-medium text-gray-900">Title:</label>
              <div class="mt-2">
                <input type="text" name="title" id="title" autocomplete="title" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Enter your title" value="{{$post->title}}">
              </div>
              <x-forms.error name="title"/>
            </div>
            <div>
              <label for="content" class="block text-sm/6 font-medium text-gray-900">Post Content:</label>
              {{-- <div class="mt-2">
                <textarea name="content" id="content" cols="20" rows="10" autocomplete="content" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Enter your content">{{$post->content}}</textarea>
              </div> --}}
              <div id="editor-container">{!!$post->content!!}</div> <!-- Quill editor will replace this div -->
              <input type="hidden" name="content" id="content"> <!-- Hidden input for storing content -->
              <x-forms.error name="content"/>
            </div>
            
            <div>
              <label for="category" class="block text-sm/6 font-medium text-gray-900">Category:</label>
              <div class="mt-2">
                <select name="category_id" id=""  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  <option value="">Select category</option>
                  @foreach ($category as $cat)
                    <option value="{{$cat->id}}">{{$cat->category}}</option>
                  @endforeach
                </select>
              </div>
              <x-forms.error name="category_id"/>
            </div>
            
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" id="create-post">Update Post</button>
            </div>
          </form>
        </div>
      </div>
      
</div>
