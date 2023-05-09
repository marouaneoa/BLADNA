<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['wilaya', 'body', '_token'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeLatest($query, $limit = 10)
    {
    return $query->orderBy('created_at', 'desc')->limit($limit);
    }
    public function pictures()
    {
    return $this->hasMany(Picture::class);
    }

}
