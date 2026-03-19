
<x-layout title="Welcome">
    <h1 class="text-4xl font-bold text-center my-10">Virtual Art Gallery</h1>
    <!-- #region Body Container -->
     <p class="text-center">Click to view:</p>
     <div class="flex justify-center p-20">
        <!-- #region Paintings Link -->
        <a href="/paintings" class="text-center rounded p-25 mx-2 border border-solid border-red-800 hover:scale-110 hover:bg-red-800 hover:text-white hover:text-xl">Paintings</a>
        <!-- #endregion -->
        <!-- #region Artist Link -->
        <a href="/artists" class="text-center rounded p-25 mx-2 border border-solid border-red-800 hover:scale-110 hover:bg-red-800 hover:text-white hover:text-xl">Artists</a>
        <!-- #endregion -->
     </div>
    <!-- #endregion -->
</x-layout>
