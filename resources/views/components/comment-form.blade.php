@props(['comment'])
<div class="flex flex-col justify-center py-12 px-8 md:px-0">
    <div class="self-start hidden md:block">
        <h2 class="text-center text-2xl/9 font-bold tracking-tight text-gray-900">Comment below</h2>
    </div>

    <div class="md:self-start sm:w-full sm:max-w-sm">
        <form class="space-y-6">
            @csrf
            <div>
                <div class="mt-2">
                    <textarea wire:model="comment" name="comment" id="comment" cols="10" rows="5"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                    @error('comment')
                        <p class="text-red-600 italic">{{ $message }}</p>
                    @enderror
                    @error('post_id')
                        <p class="text-red-600 italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-2">
                    <input wire:model="post_id" type="hidden" name="post_id" value="{{ $comment->id }}">
                </div>
            </div>

            <div>
                <button wire:click.prevent="sendcomment"
                    class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-lg font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Comment</button>
                <span wire:loading>
                    <span>
                        <div role="status">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </span>
                </span>
            </div>
        </form>
    </div>
</div>
