<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    function manufacture()
    {
        return $this->belongsTo(Manufactue::class, 'manu_id');
    }

    function protype()
    {
        return $this->belongsTo(Protype::class, 'type_id');
    }

    public function scopeSearch($query)
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('product_name', 'like', '%' . $key . '%')->limit(5);
        }
        return $query;
    }
}
