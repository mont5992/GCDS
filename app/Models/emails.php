<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emails extends Model
{
    protected $table = 'emails';

    protected $fillable = [
'id',
'type', 
'email',
    ];
}
