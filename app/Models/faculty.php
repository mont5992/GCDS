<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = 'faculty';

    protected $fillable = [
'id',
'first',
'last',
'city',
'state',
'country',
'ag',
'default'
    ];
}
