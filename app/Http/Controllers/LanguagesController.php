<?php

namespace App\Http\Controllers;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class LanguagesController extends Controller
{
 // GET /api/languages
    public function index(Request $request)
    {
        $languages = Language::all();
        return response()->json($languages);
    }
 // POST /api/languages
    public function store(Request $request)
    {
        $language = Language::create($data);
        return response()->json($language, 201);
    }

// PUT/PATCH /api/languages/{language}
    public function update(Request $request, Language $language)
    {
        $language->update($data);
        return response()->json($language);
    }
 // DELETE /api/languages/{language}
    public function destroy(Language $language)
    {
        $language->delete();
        return response()->json(['message' => 'language deleted']);
    }
}
