<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repcomment extends Model
{
    use HasFactory;
    public function comments() {
        return $this->hasOne(Comment::class);
    }
    public function customers() {
        return $this->hasMany(Customer::class,'id','id');
    }
}
