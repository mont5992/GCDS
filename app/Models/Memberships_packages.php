<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memberships_packages extends Model
{
    protected $table = 'memberships_packages';
    protected $fillable = [
        'membership_id',
        'package_name',
        'package_details',
        'package_price',
    ];
}
