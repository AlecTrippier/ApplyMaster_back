<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // 全てのアイテムを取得
    public function index()
    {
        return Item::all();
    }

    // 特定のアイテムを取得
    public function show($id)
    {
        return Item::find($id);
    }

    // アイテムを作成
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        return Item::create($request->all());
    }


    // アイテムを更新
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return $item;
    }

    // アイテムを削除
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json(null, 204);
    }
}
