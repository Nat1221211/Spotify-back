<?php

namespace App\Http\Controllers;
use App\Models\ArtistSong;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ArtistsongsController extends Controller
{
 // GET /api/artistsongs
    public function index(Request $request)
    {
        $artistsongs = ArtistSong::all();
        return response()->json($artistsongs);
    }
 // POST /api/artistsongs
    public function store(Request $request)
    {
        $artistsong = ArtistSong::create($data);
        return response()->json($artistsong, 201);
    }

// PUT/PATCH /api/artistsongs/{artistsong}
    public function update(Request $request, ArtistSong $artistsong)
    {
        $artistsong->update($data);
        return response()->json($artistsong);
    }
 // DELETE /api/artistsongs/{artistsong}
    public function destroy(ArtistSong $artistsong)
    {
        $artistsong->delete();
        return response()->json(['message' => 'Artistsong deleted']);
    }
}
