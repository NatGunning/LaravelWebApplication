<x-layout title="Sign In">
  <h1 class="mt-10 text-center text-2xl/9 font-bold">Sign In</h1>
  <form method="POST" action="/login">
    @csrf
    <!-- Login Container-->
    <div class="mt-10 space-y-7 sm:mx-auto sm:w-full sm:max-w-sm">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="text" id="email" name="email" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">

        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
        <input type="password" id="password" name="password" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
      <!-- <div class="primary-button"> -->
        <button type="submit" class="shadow bg-red-800 text-white font-bold rounded w-full py-2 hover:bg-red-950 focus:shadow-outline focus:outline-none">Sign In</button>
      <!-- </div> -->
    </div>
  </form>
  
</x-layout>