<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class audio_resources extends Model
{
    protected $table = 'audio_resources';

    protected $fillable = [
 'id',
  'title',
  'author',
  'cat',
  'desc',
  'thumb',
  'full_img',
  'file',
  'tags',
    ];
}
