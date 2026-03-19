<x-layout title="Add Painting">
    <h1 class="text-2xl font-bold text-center">Add New Painting</span></h1>

    <form action="/paintings" method="POST" enctype="multipart/form-data" class="mt-10 space-y-7 sm:mx-auto sm:w-full sm:max-w-sm">
        @csrf
        <div class="form-container">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input type="text" id="title" name="title" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Year:</label>
            <input type="number" id="year" name="year" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="artist" class="block text-gray-700 text-sm font-bold mb-2">Artist:</label>
             <select id="artist" name="artist" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
                @foreach ($artists as $artist)
                <option value="{{$artist->id}}">{{$artist->name}}</option>
                @endforeach
             </select>
             <a href="/artists/create" class="italic font-thin hover:font-normal">Artist not shown? Click here to add them!</a>
        </div>
        <div class="form-container">
            <label for="style" class="block text-gray-700 text-sm font-bold mb-2">Style:</label>
            <input type="text" id="style" name="style" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <input type="text" id="description" name="description" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Painting:</label>
            <input type="file" id="image" name="image" class="shadow object-center appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"> 
            <p class="italic">Painting image cannot be changed once saved.</p>
        </div>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        @endif
        <button type="submit" class="rounded w-full py-2 my-2 shadow bg-red-800 text-white font-bold hover:bg-red-950 focus:shadow-outline focus:outline-none">Confirm</button>
    </form>
    
</x-layout>