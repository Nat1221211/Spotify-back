<?php

namespace App\Http\Controllers;
use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ListsController extends Controller
{
 // GET /api/lists
    public function index(Request $request)
    {
        $lists = Lists::all();
        return response()->json($lists);
    }
 // POST /api/lists
    public function store(Request $request)
    {
        $list = Lists::create($data);
        return response()->json($list, 201);
    }

// PUT/PATCH /api/lists/{list}
    public function update(Request $request, Lists $list)
    {
        $list->update($data);
        return response()->json($list);
    }
 // DELETE /api/lists/{list}
    public function destroy(Lists $list)
    {
        $list->delete();
        return response()->json(['message' => 'list deleted']);
    }
}
