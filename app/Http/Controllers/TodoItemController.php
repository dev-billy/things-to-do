<?php

namespace App\Http\Controllers;

use App\Models\Item as Item;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    public function index()
    {
        $items = Item::all()->sortBy('created_at');
        return view('dashboard', ['items' => $items]);
    }

    public function saveItem(Request $request){
        $newItem = new Item();
        $newItem->name = $request->itemName;
        $newItem->completed = false;
        $newItem->save();
        return redirect()->route('home');
    }

    public function updateItem(Request $request){
        $item = Item::find($request->itemId);
        $item->completed = $item->completed ? false : true;
        $item->save();
        return redirect()->route('home');
    }

    public function deleteItem($id){
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('home');
    }
}
