<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses_tracks extends Model
{
    protected $table = 'courses_tracks';

    protected $fillable = [
'track_id',
  'courses_id',
    ];
}
