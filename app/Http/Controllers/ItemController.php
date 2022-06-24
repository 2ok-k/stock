<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    public function create(){
        $this->authorize('create',Item::class);//Pas autorisé à ceux qui n'ont pas la permission
        return view('items.create');;
    }

    public function store(ItemRequest $request){
        $this->authorize('create',Item::class);//Pas autorisé à ceux qui n'ont pas la permission
        $name = $request->name;
        $total = $request->total;

        $items = Item::create([
            'name' => $name,
            'total' => $total
        ]);
        
        return redirect('/items');
    }

    public function show($id){
        $item = Item::find($id);

        $this->authorize('view', $item);//Pas autorisé à ceux qui n'ont pas la permission

        return view('items.show',compact('item'));
    }

    public function edit($id){
        $item = Item::find($id);
        $this->authorize('update', $item);//Pas autorisé à ceux qui n'ont pas la permission
        return view('items.edit',compact('item'));
    }

    public function update(ItemRequest $request,$id){
        $name = $request->name;
        $total = $request->total;

        $item = Item::find($id);
        $this->authorize('update', $item);//Pas autorisé à ceux qui n'ont pas la permission
        $item->name = $name;
        $item->total = $total;
        $item->save();

        return redirect('/items');
    }

    public function destroy($id){
        $item = Item::find($id);
        $this->authorize('delete', $item);//Pas autorisé à ceux qui n'ont pas la permission
        $item->delete();
        return redirect('/items');
    }
}
