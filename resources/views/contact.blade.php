<x-layout>
    <x-slot:heading>Contact us</x-slot:heading>
    <section class="flex justify-center items-center">
        <form action="/contact" method="POST" class="bg-indigo-500 p-5 rounded rounded-md w-[500px] flex flex-col justify-center">
            @csrf
            <div class="text-center text-2xl">Contact Form</div>
            <div class="mb-2">
            <div><label class="text-lg" for="name">Name:</label></div>
            <input type="text" name="name" class="rounded-sm w-[100%] bg-indigo-100" required>
            </div>
            <div class="mb-2">
            <div><label class="text-lg" for="email">Email:</label></div>
            <input type="text" name="email" class="rounded-sm w-[100%] bg-indigo-100"  required>
            </div>
            <div class="mb-2">
            <div><label class="text-lg" for="message">Message:</label></div>
            <textarea name="message" id="message" cols="30" rows="10" class="rounded-sm w-[100%] bg-indigo-100" required></textarea>
            </div>
            <button class="bg-black text-white p-2 rounded-sm">Send Message</button>
            
        </form>
    </section>
</x-layout>