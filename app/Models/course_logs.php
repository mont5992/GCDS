<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_logs extends Model
{
    protected $table = 'course_logs';

    protected $fillable = [
'id',
  'user_id',
  'course_id',
  'action',
  'created_at'
    ];
}
