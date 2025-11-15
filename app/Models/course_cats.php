<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_cats extends Model
{
    protected $table = 'course_cats';

    protected $fillable = [
        'cid',
 'cat_name',
    'description',
    'main',
    'order',
    'required_reading',
    'recommended_reading',
    ];
}
