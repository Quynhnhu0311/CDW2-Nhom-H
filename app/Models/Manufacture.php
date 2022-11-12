<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    protected $fillable = [
        'manu_name','manu_qty'
    ];
    protected $primaryKey = 'manu_id';
    protected $table = 'manufactures';

    function product(){
        return $this->hasMany(Product::class,'manu_id','manu_id');
    }
}
