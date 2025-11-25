<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    protected $table = 'applications';

    protected $fillable = [
  'uid',
  'first_name',
  'last_name',
  'email',
  'application',
  'application_data',
  'created',
  'processed',
  'processed_date'
    ];
}
