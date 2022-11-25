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
<<<<<<< HEAD
=======
    }

    public function scopeSearch($query)
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('product_name', 'like', '%' . $key . '%');
        }
        if (request('type_key')) {
            $type_key = request('type_key');
            $query = $query->where('type_id', $type_key);
        }
        if (request('manu_key')) {
            $manu_key = request('manu_key');
            $query = $query->where('manu_id', $manu_key);
        }
        return $query;
>>>>>>> main
    }
}
