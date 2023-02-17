<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'favicon',
        'site_name',
        'skill_title',
        'skill_description',
        'service_main_title',
        'service_up_title',
        'hire_title',
        'contact_title',
        'contact_image',
        'phone',
        'email',
        'web_site'
    ];
}
