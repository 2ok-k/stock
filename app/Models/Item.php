<?php

namespace App\Models;

use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
