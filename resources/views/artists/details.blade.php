<x-layout title="Artist Bio">
    <div class="my-8 p-2 mx-30 border shadow-lg rounded border-stone-700">
        <!-- #region Buttons -->
        @can('edit')
        <div class="flex float-right p-1">
            <div class="px-1">
                <a href='/artists/{{$artist->id}}/edit'>
                    <button class="bg-red-900 text-white font-bold py-1 px-4 rounded hover:bg-red-950">Edit</button>
                </a>
            </div>
            <div class="px-1">
                <form action="/artists" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$artist->id}}">
                    <button type="submit" class="bg-red-900 text-white font-bold py-1 px-4 rounded hover:bg-red-950">Delete</button> 
                </form>
            </div>
        </div>
        @endcan
        <!-- #endregion -->
        <h1 class="text-2xl font-bold">{{$artist->name}} (b. {{$artist->dob}})</h1>
        <p>Age: <span>{{$artist->getAge()}}</span></p>
        <p>Style: <span>{{$artist->style}}</span></p>
        
        <div class="my-5">
            <h3 class="text-xl">About The Artist</h3>
            <p>{{$artist->description}}</p>
        </div>

        <h4 class="mt-10">Want to view their works? Find them below:</h4>
        <ul>
            @foreach ($artist->paintings as $painting)
            <li class="my-3">
                <a href="/paintings/{{$painting->id}}" class="hover:font-semibold hover:underline">
                    {{$painting->title}} ({{$painting->year}})
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</x-layout>