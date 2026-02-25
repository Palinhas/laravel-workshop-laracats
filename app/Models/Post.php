<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'content',
        'parent_id',
    ];

    public function profile() :belongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function parent() :belongsTo
    {
        return $this->belongsTo(Post::class, 'parent_id');
    }

    public function replies() : HasMany
    {
        return $this->hasMany(Post::class, 'parent_id');
    }

    public function likes() : HasMany
    {
        return $this->hasMany(Like::class);
    }

        public function reposts() :HasMany
        {
            return $this->hasMany(Post::class, 'repost_of_id');
        }
}
