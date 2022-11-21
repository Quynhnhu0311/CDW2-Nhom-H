<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_name', 'staff_email ', 'staff_password'
    ];
    protected $primaryKey = 'id';
    protected $table = 'staffs';

    public function scopeSearch($query, $key)
    {
        $query = $query->where('id', $key);
        return $query;
    }
}
