<?php

namespace App\Http\Controllers\Api;
use App\Models\Item;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClientProjectController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|mas:255'
        ]);

        return Item::create($request->all());

    }

}
