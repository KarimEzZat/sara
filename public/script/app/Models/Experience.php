<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends BaseModel
{
    use HasFactory;
    protected $fillable = ['date', 'title', 'icon', 'organisation', 'description'];
}
