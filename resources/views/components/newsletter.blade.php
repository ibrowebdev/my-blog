<div class="flex flex-col justify-center px-20 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Subscribe to our newsletter</h2>
        <p class="text-center text-sm">so you can be the first to get the latest posts</p>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <div class="mt-2">
                    <input wire:model="email" type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        placeholder="Enter your email">
                    @error('email')
                        <p class="text-red-600 italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <button wire:click.prevent="newsletter"
                    class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Subscribe</button>
            </div>
        </form>
    </div>
    <div>
        @if (session('newsletter'))
            <p class="text-indigo-900 text-center mt-2">{{ session('newsletter') }}</p>
        @endif
    </div>
</div>
