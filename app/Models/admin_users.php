<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin_users extends Model
{
    protected $table = 'admin_users';
    protected $fillable = [
        'name',
        'pw'
    ];
}
