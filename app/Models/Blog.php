<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_title','blog_description','blog_img','blog_author'
    ];
    protected $primaryKey = 'blog_id ';
    protected $table = 'blog';
}
