<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    protected $table = 'groups';

    protected $fillable = [
'id',
'name',
'admin',
'member_level',
'active'
    ];
}
