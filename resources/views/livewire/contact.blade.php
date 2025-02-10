<div>
    <x-slot:heading>Contact us</x-slot:heading>
    <section class="flex justify-center items-center">
        <form class="bg-indigo-500 p-5 rounded rounded-md w-[500px] flex flex-col justify-center">
            @csrf
            <div class="text-center text-2xl">Contact Form</div>
            <div class="mb-2">
            <div><label class="text-lg" for="name">Name:</label></div>
            <input type="text" wire:model="name" name="name" class="rounded-sm w-[100%] bg-indigo-100" required>
            @error('name')
                <p class="text-start text-red-800">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-2">
            <div><label class="text-lg" for="email">Email:</label></div>
            <input type="text" wire:model="email" name="email" class="rounded-sm w-[100%] bg-indigo-100"  required>
            @error('email')
            <p class="text-start text-red-800">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-2">
            <div><label class="text-lg" for="message">Message:</label></div>
            <textarea name="message" wire:model="message" id="message" cols="30" rows="10" class="rounded-sm w-[100%] bg-indigo-100" required></textarea>
            @error('message')
            <p class="text-start text-red-800">{{$message}}</p>
            @enderror
            </div>
            <button class="bg-black text-white p-2 rounded-sm" wire:click.prevent="sendMessage">Send Message</button>
            @if (session('contact-message'))
                
            <p class="text-center text-red-800">{{session('contact-message')}}</p>
            @endif
        </form>
    </section>
</div>
