<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'name', 'email', 'body'];

    /**
     * Write Your Code..
     *
     * @return string
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Write Your Code..
     *
     * @return string
    */
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id',);
    }

    public function getAvatarAttribute()
    {
        if ($this->user) {
            return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->user->email))) . '?s=80&d=mp';
        } else {
            return 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y&s=80';
        }
    }


}
