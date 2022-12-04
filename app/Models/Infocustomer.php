<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infocustomer extends Model
{
    use HasFactory;
    public function customers() {
        return $this->hasMany(Customer::class,'id' , 'id');
    }
}
