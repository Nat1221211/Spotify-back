<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AlbumsController extends Controller
{
    // GET /api/albums
    public function index(Request $request)
    {
        $albums = Album::with('songs')->get();
        return response()->json($albums);
    }
 // POST /api/albums
    public function store(Request $request)
    {
        $album = Album::create($data);
        return response()->json($album, 201);
    }

// PUT/PATCH /api/albums/{album}
    public function update(Request $request, Album $album)
    {
        $album->update($data);
        return response()->json($album);
    }
 // DELETE /api/albums/{album}
    public function destroy(Album $album)
    {
        $album->delete();
        return response()->json(['message' => 'Album deleted']);
    }
}
