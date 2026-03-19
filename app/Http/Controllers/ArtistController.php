<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Painting;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    function index()
    {
        $artists = Artist::orderBy('dob')->paginate(10);
        return view('artists.index', ['artists' => $artists]);
    }

    // Returns details view for an artist
    function details($id)
    {
        $artist = Artist::find($id);
        return view('artists.details',['artist' => $artist]);
    }

    // Return add artist page
    function create()
    {
        return view('artists.create');
    }

    // Store function
    function store(Request $request)
    {
        // First validate all data in request
        $request->validate([
            'name' => 'required',
            'dob' => 'required|integer|min:0|max:'.(date('Y')+1),
            'dod' => 'nullable|integer|min:0|max:'.(date('Y')+1),
            'style' => 'required',
            'description' => 'required',
        ]);

        $artist = new Artist();
        $artist->name = $request->name;
        $artist->dob = $request->dob;
        $artist->dod = $request->dod;
        $artist->style = $request->style;
        $artist->description = $request->description;
        
        $artist->save();
        return redirect('/artists');
    }

    //Returns edit view for an artist
    function edit($id)
    {
        $artist = Artist::find($id);
        return view('artists.edit', ['artist' => $artist]);
    }

    // Update an artists details
    function update(Request $request)
    {
        // First validate all data in request
        $request->validate([
            'name' => 'required',
            'dob' => 'required|integer|min:0|max:'.(date('Y')+1),
            'dod' => 'nullable|integer|min:0|max:'.(date('Y')+1),
            'style' => 'required',
            'description' => 'required',
        ]);
        // Get the artists ID
        $id = $request->input('id');
        // If the artist isnt found then throw an error
        $artist = Artist::find($id);

        $artist->name = $request->name;
        $artist->dob = $request->dob;
        $artist->dod = $request->dod;
        $artist->style = $request->style;
        $artist->description = $request->description;
        $artist->save();

        return redirect('/artists');
    }

    // Delete artist function
    function delete(Request $request) {
        $id = $request->input('id');
        $artist = Artist::find($id);
        $artist->delete();

        return redirect('/artists');
    }

}