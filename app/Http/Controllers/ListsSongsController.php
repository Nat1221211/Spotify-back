<?php

namespace App\Http\Controllers;
use App\Models\Lists_Songs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ListssongsController extends Controller
{
 // GET /api/listssongs
    public function index(Request $request)
    {
        $listssongs = Lists_Songs::all();
        return response()->json($listssongs);
    }
 // POST /api/listssongs
    public function store(Request $request)
    {
        $listssong = Lists_Songs::create($data);
        return response()->json($listssong, 201);
    }

// PUT/PATCH /api/listssongs/{listssong}
    public function update(Request $request, Lists_Songs $listssong)
    {
        $listssong->update($data);
        return response()->json($listssong);
    }
 // DELETE /api/listssongs/{listssong}
    public function destroy(Lists_Songs $listssong)
    {
        $listssong->delete();
        return response()->json(['message' => 'listssong deleted']);
    }
}
