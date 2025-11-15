<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = 'books';

    protected $fillable = [
'id',
'name',
'excluded_countries',
'author',
'filename',
'link'
    ];
}
