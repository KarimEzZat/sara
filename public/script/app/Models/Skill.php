<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'skill',
        'percent'
    ];
}
