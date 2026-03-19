<x-layout title="Edit">
    <h1 class="text-2xl font-bold text-center">Edit details of <span class="font-normal">{{$painting->title}}</span></h1>
    <form action="/paintings" method="POST" class="mt-10 space-y-7 sm:mx-auto sm:w-full sm:max-w-sm">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{$painting->id}}">
        <div class="form-container">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" value="{{$painting->title}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Year</label>
            <input type="text" id="year" name="year" value="{{$painting->year}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="artist" class="block text-gray-700 text-sm font-bold mb-2">Artist</label>
            <select type="text" id="artist" name="artist" value="{{$painting->artist->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
                @foreach ($artists as $artist)
                <option value="{{$artist->id}}">{{$artist->name}}</option>
                @endforeach
            </select>
            <a href="/artists/create" class="italic font-thin hover:font-normal">Artist not shown? Click here to add them!</a>
        </div>
        <div class="form-container">
            <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Style</label>
            <input type="text" id="style" name="style" value="{{$painting->style}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <div class="form-container">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input type="text" id="description" name="description" value="{{$painting->description}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="rounded w-full py-2 my-2 shadow bg-red-800 text-white font-bold hover:bg-red-950 focus:shadow-outline focus:outline-none">Confirm</button>
    </form>
</x-layout>