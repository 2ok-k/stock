<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Requests\TrackRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class TrackController extends Controller
{
   public function create($item_id){
        $item = Item::find($item_id);//Retour de la clée étrangère
        return view('tracks.create',compact('item'));
   }

   public function store(TrackRequest $request , $item_id){
        $item = Item::find($item_id);

        //$track = new Track();
        $item->tracks()->create([
            'type' => $request->type,
            'quantity' => $request->quantity,
        ]);
        
        if ($request->type == 'in') {
            $item->total += $request->quantity;
            $item->save();
        }
        elseif ($request->type == 'out') {
            $item->total -= $request->quantity;
            $item->save();
        }

        return redirect ("/items/{$item->id}");
   }

   public function destroy($id){
        $track = Track::find($id);

        $item = $track->item;

        if ($track->type == 'in') {
            $item->total -= $track->quantity;
            $item->save();
        } elseif($track->type == 'out') {
            $item->total += $track->quantity;
            $item->save();
        }

        $track->delete();
        return redirect("/items/{$item->id}");
   }
}
