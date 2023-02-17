<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    //QueryScope OrderDesending
    public static function scopeDesc($query)
    {
        return $query->orderBy('id', 'Desc');
    }

}
