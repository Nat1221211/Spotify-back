<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class SongsController extends Controller
{
 // GET /api/songs
    public function index(Request $request)
    {
        $songs = Song::with('genres')->get();
        return response()->json($songs);
    }
 // POST /api/songs
    public function store(Request $request)
    {
        $song = Song::create($data);
        return response()->json($song, 201);
    }

// PUT/PATCH /api/songs/{song}
    public function update(Request $request, Song $song)
    {
        $song->update($data);
        return response()->json($song);
    }
 // DELETE /api/songs/{song}
    public function destroy(Song $song)
    {
        $song->delete();
        return response()->json(['message' => 'song deleted']);
    }
}
