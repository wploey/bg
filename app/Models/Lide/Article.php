<?php

namespace App\Models\Lide;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'lide_article';
    protected $fillable = [
        'title', 'body', 'tag', 'user_id'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
