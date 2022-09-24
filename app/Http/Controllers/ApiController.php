<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function date(Request $request)
    {
        date_default_timezone_set('America/Sao_Paulo');
        return response()->json([
            "date" => date("d/m/y H:i:s")
        ]);
    }
    public function text(Request $request)
    {
        $data = $request->toArray();
        return response()->json([
            "text" => $data['text']
        ]);
    }
}
