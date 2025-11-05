<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class library_cats extends Model
{
    protected $table = 'library_cats';

    protected $fillable = [
'id',
'name'
    ];
}
