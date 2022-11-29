<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name', 'product_price', 'product_img', 'product_qty', 'product_sold', 'product_description', 'type_id', 'manu_id', 'feature_id'
    ];
    protected $primaryKey = 'product_id';
    protected $table = 'products';

    function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manu_id');
    }

    function protype()
    {
        return $this->belongsTo(Protype::class, 'type_id');
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
    }
}
