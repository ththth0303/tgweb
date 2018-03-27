<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $fillable = [
        'title',
        'icon',
        'image',
        'short_description',
        'description',
        'display_order',
    ];
}
