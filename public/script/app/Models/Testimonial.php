<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'position', 'review'];
}
