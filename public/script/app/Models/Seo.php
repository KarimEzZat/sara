<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seo extends BaseModel
{
    use HasFactory;
    protected $table = 'seo';

    protected $fillable = ['name', 'content'];
}
