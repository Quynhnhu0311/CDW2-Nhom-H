<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id','coupon_code','product_name','product_price','order_code','product_qty'
    ];
    protected $primaryKey = 'detailorder_id';
    protected $table = 'detail_orders';

}
