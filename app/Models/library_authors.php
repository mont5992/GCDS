<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class library_authors extends Model
{
    protected $table = 'library_authors';

    protected $fillable = [
'id',
'name',
'img',
'bio'
    ];
}
