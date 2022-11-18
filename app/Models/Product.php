<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function manufacture(){
        return $this->belongsTo(Manufactue::class,'manu_id');
    }

    function protype(){
        return $this->belongsTo(Protype::class,'type_id');
    }
}
