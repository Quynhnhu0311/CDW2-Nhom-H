<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_title','blog_description','blog_img','blog_author','category_id'
    ];
    protected $primaryKey = 'blog_id ';
    protected $table = 'blog';

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function commentblog() {
        return $this->hasMany(Commentblog::class,'blog_id');
    }
    //thêm localScope
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query->where('blog_title','like','%'.$key.'%');
        }
        return $query;
    }
}
