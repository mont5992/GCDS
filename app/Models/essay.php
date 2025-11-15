<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class essay extends Model
{
    protected $table = 'essay';

    protected $fillable = [
'id',
'user_id',
'course_id',
'quiz_id',
'date',
'filename',
'graded_filename'
    ];
}
