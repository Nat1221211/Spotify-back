<?php

namespace App\Http\Controllers;
use App\Models\PlayList;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ListsController extends Controller
{
 // GET /api/lists
    public function index(Request $request)
    {
        $lists = PlayList::all();
        return response()->json($lists);
    }
 // POST /api/lists
    public function store(Request $request)
    {
        $list = PlayList::create($data);
        return response()->json($list, 201);
    }

// PUT/PATCH /api/lists/{list}
    public function update(Request $request, PlayList $list)
    {
        $list->update($data);
        return response()->json($list);
    }
 // DELETE /api/lists/{list}
    public function destroy(PlayList $list)
    {
        $list->delete();
        return response()->json(['message' => 'list deleted']);
    }
}
