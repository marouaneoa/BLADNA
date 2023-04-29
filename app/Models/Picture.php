<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public static function toggle(Post $post, User $user)
    {
    $like = $post->likes()->where('user_id', $user->id)->first();

    if ($like) {
        $like->delete();
    } else {
        $post->likes()->create([
            'user_id' => $user->id
        ]);
    }
    }

}
