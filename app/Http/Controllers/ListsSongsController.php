<?php

namespace App\Http\Controllers;
use App\Models\ListSong;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ListssongsController extends Controller
{
 // GET /api/listssongs
    public function index(Request $request)
    {
        $listssongs = ListSong::all();
        return response()->json($listssongs);
    }
 // POST /api/listssongs
    public function store(Request $request)
    {
        $listssong = ListSong::create($data);
        return response()->json($listssong, 201);
    }

// PUT/PATCH /api/listssongs/{listssong}
    public function update(Request $request, ListSong $listssong)
    {
        $listssong->update($data);
        return response()->json($listssong);
    }
 // DELETE /api/listssongs/{listssong}
    public function destroy(ListSong $listssong)
    {
        $listssong->delete();
        return response()->json(['message' => 'listssong deleted']);
    }
}
