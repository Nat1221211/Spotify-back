<?php

namespace App\Http\Controllers;
use App\Models\AlbumArtist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AlbumArtistController extends Controller
{
    // GET /api/albumartists
    public function index(Request $request)
    {
        $albumartists = AlbumArtist::all();
        return response()->json($albumartists);
    }
 // POST /api/albumartists
    public function store(Request $request)
    {
        $albumartist = AlbumArtist::create($data);
        return response()->json($albumartist, 201);
    }

// PUT/PATCH /api/albumartists/{albumartist}
    public function update(Request $request, AlbumArtist $albumartist)
    {
        $albumartist->update($data);
        return response()->json($albumartist);
    }
 // DELETE /api/albumartists/{albumartist}
    public function destroy(AlbumArtist $albumartist)
    {
        $albumartist->delete();
        return response()->json(['message' => 'Albumartist deleted']);
    }
}
