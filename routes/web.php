<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

// #region Paintings
Route::get('/paintings', [Controllers\PaintingController::class, 'index']);

// Routes from the navbar to the create view in the controller
Route::get('/paintings/create', [Controllers\PaintingController::class, 'create'])->middleware(['auth', 'can:edit']);

// Routes from the create page form to the store function in the controller
Route::post('/paintings', [Controllers\PaintingController::class, 'store'])->middleware(['auth', 'can:edit']);

// Routes from the index page to a specific model using the ID
Route::get('/paintings/{id}', [Controllers\PaintingController::class, 'details']);

// Routes from the details page to the edit view
Route::get('/paintings/{id}/edit', [Controllers\PaintingController::class, 'edit'])->middleware(['auth', 'can:edit']);

// Routes from the edit details page form to the update function in the controller
Route::patch('/paintings', [Controllers\PaintingController::class, 'update'])->middleware(['auth', 'can:edit']);

// Routes from the edit details page form to the delete function in the controller
Route::delete('/paintings', [Controllers\PaintingController::class, 'delete'])->middleware(['auth', 'can:delete']);
// #endregion

// #region Artists
Route::get('/artists', [Controllers\ArtistController::class, 'index']);

// Routes from the navbar to the create view in the controller
Route::get('/artists/create', [Controllers\ArtistController::class, 'create'])->middleware(['auth', 'can:edit']);

// Routes from the create page form to the store function in the controller
Route::post('/artists', [Controllers\ArtistController::class, 'store'])->middleware(['auth', 'can:edit']);

// Routes from the index page to a specific model using the ID
Route::get('/artists/{id}', [Controllers\ArtistController::class, 'details']);

// Routes from the details page to the edit view
Route::get('/artists/{id}/edit', [Controllers\ArtistController::class, 'edit'])->middleware(['auth', 'can:edit']);

// Routes from the edit details page form to the update function in the controller
Route::patch('/artists', [Controllers\ArtistController::class, 'update'])->middleware(['auth', 'can:edit']);

// Routes from the edit details page form to the delete function in the controller
Route::delete('/artists', [Controllers\ArtistController::class, 'delete'])->middleware(['auth', 'can:delete']);

// #endregion

// #region Auth Login
Route::get('/login', [Controllers\AuthController::class, 'index'])->name("login");
Route::post('/login', [Controllers\AuthController::class, 'login']);
Route::post('/logout', [Controllers\AuthController::class, 'logout']);
// #endregion