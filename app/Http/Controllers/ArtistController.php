<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ArtistController extends Controller
{
 // GET /api/artists
    public function index(Request $request)
    {
        $artists = Artist::all();
        return response()->json($artists);
    }
 // POST /api/artists
    public function store(Request $request)
    {
        $artist = Artist::create($data);
        return response()->json($artist, 201);
    }

// PUT/PATCH /api/artists/{artist}
    public function update(Request $request, Artist $artist)
    {
        $artist->update($data);
        return response()->json($artist);
    }
 // DELETE /api/artists/{artist}
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return response()->json(['message' => 'Artist deleted']);
    }
}
