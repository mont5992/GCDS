<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $table = 'courses';

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
  'course_id',
  'active',
  'coming_date',
  'large_pic',
  'med_pic',
  'thumb_pic' ,
  'prev_embed',
  'full_embed',
  'vimeo_embed',
  'cats_id',
  'tags',
  'timestamp',
  'transcript',
  'transcript_spanish',
  'transcript_indonesian',
  'transcript_burmese',
  'syllabus',
  'lectures',
  'readings',
  'packages_id',
  'course_id_override',
  'level',
  'building',
  'transcript_french',
  'transcript_nepalese',
  'transcript_korean',
  'transcript_portuguese',
  'transcript_italian',
  'transcript_tamil',
  'transcript_swahili',
  'transcript_text',
  'credits',
  'ag_suggested_course',
    ];
}
