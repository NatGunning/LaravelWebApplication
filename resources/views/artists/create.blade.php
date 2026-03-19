<x-layout title="Add Artist">
    <h1 class="text-2xl font-bold text-center">Add New Artist</span></h1>

    <form action="/artists" method="POST" enctype="multipart/form-data" class="mt-10 space-y-7 sm:mx-auto sm:w-full sm:max-w-sm">
        @csrf
        <div class="form-container">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth Year</label>
            <input type="number" id="dob" name="dob" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="dod" class="block text-gray-700 text-sm font-bold mb-2">Date of Death Year (If N/A, please leave blank)</label>
            <input type="number" id="dod" name="dod" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="style" class="block text-gray-700 text-sm font-bold mb-2">Style</label>
            <input type="text" id="style" name="style" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input type="text" id="description" name="description" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="italic text-red-800">{{ $error }}</p>
        @endforeach
        @endif
        <button type="submit" class="rounded w-full py-2 my-2 shadow bg-red-800 text-white font-bold hover:bg-red-950 focus:shadow-outline focus:outline-none">Confirm</button>
    </form>
    
</x-layout>