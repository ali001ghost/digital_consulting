<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperinceController extends Controller
{
    public function store(Request $request)
    {
        $result = ExperinceController::query()->create([
            'name' => $request -> name,
            'description' => $request -> description
          ]);
    }
}
