<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends BaseModel
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
