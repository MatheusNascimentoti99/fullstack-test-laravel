<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function currentDate(Request $request)
    {
        return response()->json([
            "data" => now()
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'description' => 'required | string | max:255'
        ]);
        return response()->json([
            'data' => $request->description
        ]);
    }
}
