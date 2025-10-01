<?php

namespace App\Http\Controllers;
use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class SongsController extends Controller
{
 // GET /api/songs
    public function index(Request $request)
    {
        $songs = Songs::all();
        return response()->json($songs);
    }
 // POST /api/songs
    public function store(Request $request)
    {
        $song = Songs::create($data);
        return response()->json($song, 201);
    }

// PUT/PATCH /api/songs/{song}
    public function update(Request $request, Songs $song)
    {
        $song->update($data);
        return response()->json($song);
    }
 // DELETE /api/songs/{song}
    public function destroy(Songs $song)
    {
        $song->delete();
        return response()->json(['message' => 'song deleted']);
    }
}
