<?php

namespace App\Http\Controllers;

use App\Models\Item as Item;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('dashboard', ['items' => $items]);
    }

    public function saveItem(Request $request){
        $newItem = new Item();
        $newItem->name = $request->itemName;
        $newItem->completed = false;
        $newItem->save();
        return redirect()->route('home');
    }
}
