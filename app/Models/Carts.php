<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id','product_id','product_qty','product_image','product_name','product_price','session_id'
    ];
    protected $primaryKey = 'cart_id';
    protected $table = 'carts';
}
