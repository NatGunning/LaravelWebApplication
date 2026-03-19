<!DOCTYPE html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="https://scaling-space-enigma-v455g54grgjcwrrg-5173.app.github.dev:443/resources/css/app.css" />
    <script src="https://scaling-space-enigma-v455g54grgjcwrrg-5173.app.github.dev:443/resources/js/app.js"></script>

<html>
  <head>
    <title>{{$title}}</title>
    <nav class="bg-stone-700 text-white font-serif  overflow-x-visible">
      <!-- #region Primary Navigation -->
      <div class="flex flex-row items-center justify-start space-x-1 navigation-menu">
        <a href="/" class="py-4 px-4 block hover:bg-stone-800">Home</a>
        <a href="/paintings" class="py-4 px-4 block hover:bg-stone-800">Paintings</a>
        <a href="/artists" class="py-4 px-4 block hover:bg-stone-800">Artists</a>
        <!-- #region Dropdown Menu -->
        @can('edit')
        <div class="relative">
          <button class="dropdown-toggle py-4 px-4 hover:bg-gray-700 flex items-center gap-2">
            <span class="pointer-events-none">Add</span>
            <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>chevron-down</title>
              <g fill="none">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
          <div class="dropdown-menu absolute hidden bg-gray-700 text-white rounded-b-lg pb-2 w-48">
            <a href="/paintings/create" class="block py-4 px-4 hover:bg-stone-800">Add Painting</a>
            <a href="/artists/create" class="block py-4 px-4 hover:bg-stone-800">Add Artist</a>
          </div>
        </div>
        @endcan
        <!-- #endregion -->
        <a href="/about" class="py-4 px-4 block hover:bg-stone-800">About</a>
        <div class="flex flex-row ml-auto">
        @auth
        <p class="py-4 px-4 ml-auto truncate hidden sm:block">{{Auth::user()->name}}</p>
        <form method="POST" action="/logout" class="py-4 px-4 block ml-auto hover:bg-stone-800">
          @csrf
          <button type='submit'>Logout</button>
        </form>
        @endauth
        @guest
        <a href="/login" class="py-4 px-4 block ml-auto hover:bg-stone-800">Sign in</a>
        @endguest

        </div>
      </div>
      <!-- #endregion -->
    </nav>
  </head>
  <body class="font-serif">
    {{$slot}}
  </body>
</html>