<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeInfo extends Model
{
    public $fillable = [
        'title',
        'content',
        'get_start_link',
        'learn_more_link',
        'background',
    ];
}
