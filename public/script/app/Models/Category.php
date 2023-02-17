<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name'];

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
