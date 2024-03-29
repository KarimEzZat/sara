<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends BaseModel
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'title', 'description', 'image', 'name', 'address', 'freelance', 'city', 'experience_year'
    ];
}
