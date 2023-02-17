<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends BaseModel
{
    use HasFactory;
    protected $fillable = ['icon', 'link'];
}
