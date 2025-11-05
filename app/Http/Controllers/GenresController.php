<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class GenresController extends Controller
{
 // GET /api/genres
    public function index(Request $request)
    {
        $genres = Genre::all();
        return response()->json($genres);
    }
 // POST /api/genres
    public function store(Request $request)
    {
        $genre = Genre::create($data);
        return response()->json($genre, 201);
    }

// PUT/PATCH /api/genres/{genre}
    public function update(Request $request, Genre $genre)
    {
        $genre->update($data);
        return response()->json($genre);
    }
 // DELETE /api/genres/{genre}
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return response()->json(['message' => 'genre deleted']);
    }
}
