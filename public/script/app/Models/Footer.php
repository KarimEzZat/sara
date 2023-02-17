<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'owner', 'copyright', 'url',
    ];
}
