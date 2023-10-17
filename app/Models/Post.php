<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, HasTags;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'yt_iframe',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'created_by'
    ];
  
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    public function user()
    {
        return $this->belongsTo(Post::class,'created_by','id');
    }
}
