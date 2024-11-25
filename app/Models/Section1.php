<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section1 extends Model
{
    protected $fillable = [
        'name',
        'job',
        'description',
        'facebook_link',
        'instgram_link',
        'linkedin_link',
        'image1',
        'image2',
        'image3',
    ];

}
