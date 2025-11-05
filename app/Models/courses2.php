<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses2 extends Model
{
    protected $table = 'courses2';

   protected $fillable = [
    'id',
    'uid',
    'title',
    'desc',
    'html',
    'teachers',
    'price',
    'price2',
    'course_type',
    'active',
    'large_pic',
    'med_pic',
    'thumb_pic',
    'prev_embed',
    'full_embed',
    'cats_id',
    'tags',
    'timestamp',
];
}
