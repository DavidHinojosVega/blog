<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    Use Sluggable;
    protected $fillable = [
        'title',
        'description',
        'img',
        'content',
        'likes',
        'slug',
        'user_id',
        'categoria_id'
    ];

    public function sluggable(): array{
        return[
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
