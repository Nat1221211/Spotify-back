<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
 // GET /api/users
    public function index(Request $request)
    {
        $users = User::all();
        return response()->json($users);
    }
 // POST /api/users
    public function store(Request $request)
    {
        $user = User::create($data);
        return response()->json($user, 201);
    }

// PUT/PATCH /api/users/{user}
    public function update(Request $request, User $user)
    {
        $user->update($data);
        return response()->json($user);
    }
 // DELETE /api/users/{user}
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'user deleted']);
    }
}
