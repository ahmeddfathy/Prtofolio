<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section5 extends Model
{
    protected $fillable = [
        'name', 'role', 'content', 'phone', 'email', 'facebook_link', 'linkedin_link', 'instagram_link',
    ];
}
