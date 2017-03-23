<?php

namespace App\Models\Lide;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'lide_tag';
    protected $fillable = ['name','bio'];

    public function articles()
    {
        return $this->belongsToMany(Article::class)->withTimestamps();
    }
}
