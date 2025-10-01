<?php

namespace App\Http\Controllers;
use App\Models\Album_Artist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AlbumArtistController extends Controller
{
    // GET /api/albumartists
    public function index(Request $request)
    {
        $albumartists = Album_Artist::all();
        return response()->json($albumartists);
    }
 // POST /api/albumartists
    public function store(Request $request)
    {
        $albumartist = Album_Artist::create($data);
        return response()->json($albumartist, 201);
    }

// PUT/PATCH /api/albumartists/{albumartist}
    public function update(Request $request, Album_Artist $albumartist)
    {
        $albumartist->update($data);
        return response()->json($albumartist);
    }
 // DELETE /api/albumartists/{albumartist}
    public function destroy(Album_Artist $albumartist)
    {
        $albumartist->delete();
        return response()->json(['message' => 'Albumartist deleted']);
    }
}
