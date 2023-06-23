<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();
        return view('admin.artworks.index', compact('artworks'));
    }

    public function create()
    {
        return view('admin.artworks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Aggiungi altre validazioni necessarie per i tuoi campi
        ]);

        $artwork = Artwork::create($data);

        return redirect()->route('admin.artworks.index')->with('success','Artwork successfully created');
    }

    public function show(Artwork $artwork)
    {
        return view('admin.artworks.show', compact('artwork'));
    }

    public function edit(Artwork $artwork)
    {
        return view('admin.artworks.edit', compact('artwork'));
    }

    public function update(Request $request, Artwork $artwork)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Aggiungi altre validazioni necessarie per i tuoi campi
        ]);

        $artwork->update($data);

        return redirect()->route('admin.artworks.index')->with('success','Artwork successfully updated');
    }

    public function destroy(Artwork $artwork)
    {
        $artwork->delete();

        return redirect()->route('admin.artworks.index')->with('success','Artwork successfully deleted');
    }
}
