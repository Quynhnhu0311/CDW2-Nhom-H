<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_fistname','customer_lastname','customer_province','customer_district','customer_town','customer_email','customer_phone','customer_note'
    ];
    protected $primaryKey = 'shipping_id';
    protected $table = 'shippings';
}
