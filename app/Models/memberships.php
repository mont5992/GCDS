<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memberships extends Model
{
    protected $table = 'memberships';
    protected $fillable = [
        'name',
        'packages',
        'other_price',
        'price_per_year',
    ];
}
