<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMetadata extends Model
{
    use HasFactory;
    protected $table = 'page_metadata';

    protected $fillable = [
        'page_name',
        'title',
        'meta_title',
        'meta_description',
    ];
}
