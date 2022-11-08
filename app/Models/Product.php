<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name','product_price','product_img','product_qty','product_description','type_id','manu_id','feature_id'
    ];
    protected $primaryKey = 'product_id ';
    protected $table = 'products';

    function manufacture(){
        return $this->belongsTo(Manufacture::class,'manu_id');
    }

    function protype(){
        return $this->belongsTo(Protype::class,'type_id');
    }
}
