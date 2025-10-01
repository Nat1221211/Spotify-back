<?php

namespace App\Http\Controllers;
use App\Models\Albums;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AlbumsController extends Controller
{
    // GET /api/albums
    public function index(Request $request)
    {
        $albums = Albums::all();
        return response()->json($albums);
    }
 // POST /api/albums
    public function store(Request $request)
    {
        $album = Albums::create($data);
        return response()->json($album, 201);
    }

// PUT/PATCH /api/albums/{album}
    public function update(Request $request, Albums $album)
    {
        $album->update($data);
        return response()->json($album);
    }
 // DELETE /api/albums/{album}
    public function destroy(Albums $album)
    {
        $album->delete();
        return response()->json(['message' => 'Album deleted']);
    }
}
