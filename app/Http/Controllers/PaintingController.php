<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Painting;
use App\Models\Artist;
use Termwind\ValueObjects\Style;

class PaintingController extends Controller
{
    // Returns home page with all paintings
    function index()
    {
        $paintings = Painting::orderBy('year')->paginate(10);
        return view('paintings.index',['paintings' => $paintings]);
    }

    // Returns details view for a single painting
    function details($id)
    {
        $painting = Painting::find($id);
        return view('paintings.details',['painting' => $painting]);
    }

    // Return add painting page
    function create()
    {
        $artists = Artist::all();
        return view('paintings.create', ['artists'=>$artists]);
    }

    // Store function
    function store(Request $request)
    {
        // First validate all data in request
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer|min:0|max:'.(date('Y')+1),
            'style' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        // Change the image name to the title, replacing any spaces
        // Also change file type as .svg is better for storing
        $imageName = str_replace(' ', '_', $request->title).'.svg';

        // Add the uploaded image to the images folder
        $request->image->move(public_path('images'), $imageName);
        $painting = new Painting();
        $painting->title = $request->title;
        $painting->year = $request->year;
        $painting->style = $request->style;
        $painting->description = $request->description;
        $painting->image = $imageName;
        $painting->artist_id = $request->artist;

        $painting->save();
        return redirect('/paintings');
    }

    //Returns edit view for a single painting
    function edit($id)
    {
        $painting = Painting::find($id);
        $artists = Artist::all();
        return view('paintings.edit', ['painting' => $painting, 'artists' => $artists]);
    }

    // Update a paintings details
    function update(Request $request)
    {
        // First validate all data in request
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer|min:0|max:'.(date('Y')+1),
            'style' => 'required',
            'description' => 'required',
        ]);
        // Get the paintings ID
        $id = $request->input('id');
        // If the painting isnt found then throw an error
        $painting = Painting::find($id);

        // Update the painting
        // Change image name to match the title
        $imageName = str_replace(' ', '_', $request->title).'.svg';
        $painting->title = $request->title;
        $painting->year = $request->year;
        $painting->style = $request->style;
        $painting->description = $request->description;
        $painting->image = $imageName;
        $painting->artist_id = $request->artist;
        $painting->save();

        return redirect('/paintings');
    }

    // Delete painting function
    function delete(Request $request) {
        $id = $request->input('id');
        $painting = Painting::find($id);
        $image_path = 'images/'.$painting->image;
        // Find and delete image from the images folder
        if(File::exists($image_path)) {
            File::delete(public_path($image_path));
        }
        $painting->delete();

        return redirect('/paintings');
    }
}