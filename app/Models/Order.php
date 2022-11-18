<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id','shipping_id','order_code','order_status'
    ];
    protected $primaryKey = 'order_id';
    protected $table = 'orders';

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
