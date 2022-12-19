<?php

namespace App\Http\Controllers;

use App\Models\Consulting;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function store(Request $request)
    {
        $result = Consulting::query()->where('id',Consulting::user()->id)->create([
            'Consulting_name' => $request -> Consulting_name
          ]);
    }
}
