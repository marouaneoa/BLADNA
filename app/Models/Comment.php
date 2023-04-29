<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function scopeLatest($query, $limit = 10)
    {
    return $query->orderBy('created_at', 'desc')->limit($limit);
    }
    public function userCanDelete(User $user)
    {
    return $user->id === $this->user_id;
    }


}
