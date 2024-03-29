<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends BaseModel
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
