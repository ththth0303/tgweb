<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    protected $table = 'why_choose_us';

    protected $casts = [
        'image' => 'array',
        'step' => 'array',
    ];
}
