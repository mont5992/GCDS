<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article_resources extends Model
{
    protected $table = 'article_resources';

    protected $fillable = [
'id',
  'title',
  'author_id',
  'cat',
  'desc',
  'thumb',
  'full_img',
  'file',
  'content',
  'tags',
    ];

}
