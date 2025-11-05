<?php

namespace App\Http\Controllers;
use App\Models\List;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ListsController extends Controller
{
 // GET /api/lists
    public function index(Request $request)
    {
        $lists = List::all();
        return response()->json($lists);
    }
 // POST /api/lists
    public function store(Request $request)
    {
        $list = List::create($data);
        return response()->json($list, 201);
    }

// PUT/PATCH /api/lists/{list}
    public function update(Request $request, List $list)
    {
        $list->update($data);
        return response()->json($list);
    }
 // DELETE /api/lists/{list}
    public function destroy(List $list)
    {
        $list->delete();
        return response()->json(['message' => 'list deleted']);
    }
}
