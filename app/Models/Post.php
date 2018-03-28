<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        'title',
        'image',
        'content',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id')->select(['id', 'name']);
    }
}
