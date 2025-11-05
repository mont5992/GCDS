<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ebook_resources extends Model
{
    protected $table = 'ebook_resources';

    protected $fillable = [
        'id',
    'title',
    'author_id',
    'cat',
    'cat_id',
    'desc',
    'thumb',
    'full_img',
    'file',
    'tags',
    'author',
];


}
