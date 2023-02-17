<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Header extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'hero_title', 'animated_text', 'image', 'cv',
    ];

}
