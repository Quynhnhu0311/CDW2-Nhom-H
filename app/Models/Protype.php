<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_name','type_qty'
    ];
    protected $primaryKey = 'type_id';
    protected $table = 'protypes';

    function product(){
        return $this->hasMany(Product::class,'type_id','type_id');
    }
}
