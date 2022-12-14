<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $result = User::query()->create([
            'role' => $request->role,
            'name' => $request->name,
            'bag' => $request->bag,
            'photo' => $request->photo,
            'phone' => $request->phone,
            'address_id' => $request->address_id,
            'password' => $request->password,
 ]);
    }
}
