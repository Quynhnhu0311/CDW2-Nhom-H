<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function repcomment() {
        return $this->hasMany(Repcomment::class, 'comment_id','comment_id');
    }
    public function customers() {
        return $this->hasMany(Customer::class, 'id' , 'id');
    }
}
