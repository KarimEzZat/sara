<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Counter extends BaseModel
{
    use HasFactory;
    protected $fillable = ['title', 'icon', 'number'];
}
