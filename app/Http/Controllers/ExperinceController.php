<?php

namespace App\Http\Controllers;

use App\Models\Experince;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Bridge\User;

class ExperinceController extends Controller
{
    public function store(Request $request)
    {
        $result = ExperinceController::query()->where('id',Auth::user()->id)->create([
            'name' => $request -> name,
            'description' => $request -> description
          ]);
    }
}
