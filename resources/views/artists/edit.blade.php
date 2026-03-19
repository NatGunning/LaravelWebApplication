<x-layout title="Edit Artist">
    <h1 class="text-2xl font-bold text-center">Edit details of <span class="font-normal">{{$artist->name}}</span></h1>
    <form action="/artists" method="POST" class="mt-10 space-y-7 sm:mx-auto sm:w-full sm:max-w-sm">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{$artist->id}}">
        <div class="form-container">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" value="{{$artist->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth (Year)</label>
            <input type="number" id="dob" name="dob" value="{{$artist->dob}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="dod" class="block text-gray-700 text-sm font-bold mb-2">Date of Death (If N/A, please leave blank)</label>
            <input type="number" id="dod" name="dod" value="{{$artist->dod}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="style" class="block text-gray-700 text-sm font-bold mb-2">Style</label>
            <input type="text" id="style" name="style" value="{{$artist->style}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input type="text" id="description" name="description" value="{{$artist->description}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="rounded w-full py-2 my-2 shadow bg-red-800 text-white font-bold hover:bg-red-950 focus:shadow-outline focus:outline-none">Confirm</button>
    </form>
</x-layout>