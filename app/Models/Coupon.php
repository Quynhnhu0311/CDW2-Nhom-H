<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'coupon_code','coupon_name','coupon_qty','coupon_condition','coupon_number'
    ];
    protected $primaryKey = 'coupon_id';
    protected $table = 'coupons';
}
