<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VpsPlan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'cpu',
        'ram',
        'disk',
        'bandwidth',
    ];
}
