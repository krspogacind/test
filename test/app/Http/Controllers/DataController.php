<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open(Request $request)
    {
        return response()->json(['message' => 'this data is open for all users']);
    }

    public function closed(Request $request)
    {
        return response()->json(['message' => 'this data is for authenticated users only']);
    }
}
