<x-layout>
    <x-slot:heading>Author Register</x-slot:heading>
    <div class="flex flex-col justify-center px-20 py-1 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register</h2>
          <p class="text-center text-sm">Become an author on Dardaa Blog</p>
        </div>
      
        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="/author/register" method="POST">
            @csrf
            <div>
              <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
              <div class="mt-2">
                <input type="text" name="name" id="name" autocomplete="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Enter your name" :value="old('name')">
              </div>
              <x-forms.error name="name"/>
            </div>
            <div>
              <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
              <div class="mt-2">
                <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Enter your email" :value="old('email')">
              </div>
              <x-forms.error name="email"/>
            </div>
            <div>
              <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
              <div class="mt-2">
                <input type="password" name="password" id="password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Enter your password">
              </div>
              <x-forms.error name="password"/>
            </div>
            <div>
              <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
              <div class="mt-2">
                <input type="password" name="password_confirmation" id="password_confirmation" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Enter your password">
              </div>
            </div>
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
            </div>
            <div class="text-center"><a href="/author" class="text-ibrohim">Login</a></div>
          </form>


          
        </div>
      </div>
      
</x-layout>