<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'type',
        'quantity',
    ];

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
