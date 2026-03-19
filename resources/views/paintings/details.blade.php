<x-layout title="Details">
    <div class="m-8 p-2 border rounded shadow-lg border-stone-700">
        <!-- #region Buttons -->
        @can('edit')
        <div class="flex float-right p-1">
            <div class="px-1">
                <a href='/paintings/{{$painting->id}}/edit'>
                    <button class="bg-red-900 text-white font-bold py-1 px-4 rounded hover:bg-red-950">Edit</button>
                </a>
            </div>
            <div class="px-1">
                <form action="/paintings" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$painting->id}}">
                    <button type="submit" class="bg-red-900 text-white font-bold py-1 px-4 rounded hover:bg-red-950">Delete</button> 
                </form>
            </div>
        </div>
        @endcan
        <!-- #endregion -->
        <h1 class="text-2xl font-bold">{{$painting->title}}, <span class="font-normal">{{$painting->year}}</span></h1>
        <span class="italic">By <a href="/artists/{{$painting->artist_id}}" class="hover:underline">{{$painting->artist->name}}</a></span>
        
        <img src="/images/{{$painting->image}}" alt="{{$painting->image}}" class="block m-auto w-1/4">
        <div class="my-5">
            <p class="font-bold my-10">Style: <span class="font-normal">{{ $painting->style }}</span></p>
            <h3 class="text-xl">Description</h3>
            <p>{{$painting->description}}</p>
        </div>
    </div>
</x-layout>