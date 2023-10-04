<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Taggable;
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $fillable = [
        'category_id', 
        'name', 
        'tags',
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
}
