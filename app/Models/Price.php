<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $casts = [
        'price_content' => 'array',
    ];
}
