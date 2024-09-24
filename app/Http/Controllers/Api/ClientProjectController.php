<?php

namespace App\Http\Controllers\Api;
use App\Models\ClientProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientProjectController extends Controller
{
    public function index(){

        return ClientProject::all();
    }

    public function show($id){
        return ClientProject::show($id);
    }

    public function store(Request $request){
        $request->validate(
            [
                'client_name' => 'required|string|max:255',
                'project_name' => 'required|string|max:255',
                'status' => 'required|string|max:100',
                'start_date' => 'date|nullable',
                'end_date' => 'date|nullable',
                'budget' => 'required|numeric|regex:/^\d{1,10}(\.\d{1,2})?$/', // 10桁までの整数部と小数点第2位まで
            ]);

        return ClientProject::create($request->all());
    }
}
