<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'contenido',
        'post_id',
        'user_id'
    ];
}
