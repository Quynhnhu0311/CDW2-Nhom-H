<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email ', 'password'
    ];
    protected $primaryKey = 'id';
    protected $table = 'customers';

    public function infocustomers() {
        return $this->hasMany(Infocustomer::class,'id' , 'id');
    }
    public function addresscustomers() {
        return $this->hasMany(Addresscustomer::class,'id' , 'id');
    }

}
