<x-layout title="Paintings">
    <div class="my-8 p-2 mx-30 shadow-lg border rounded border-stone-700">
    @can('edit')
    <div class="flex float-right p-1">
      <div class="px-1">
        <a href='/paintings/create'>
          <button class="bg-red-900 text-white font-bold py-1 px-4 rounded hover:bg-red-950">Add</button>
        </a>
      </div>
    </div>
    @endcan
    <h1 class="text-4xl font-bold text-center my-10">Paintings</h1>
    <h3>Click to view:</h3>
    
    <div>
        <ul class="h-fit">
            @foreach ($paintings as $painting)
            <li class="my-3">
                <a href="/paintings/{{$painting->id}}" class="hover:font-semibold hover:underline">
                    {{$painting->title}} ({{$painting->year}})
                </a>
            </li>
            @endforeach
        </ul>
        {{ $paintings->links() }}
    </div>
</div>
</x-layout>