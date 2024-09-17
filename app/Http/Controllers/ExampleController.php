<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Hello from Laravel!']);
    }

    public function items(){
        return response()->json(['items' => name]);
    }
}
