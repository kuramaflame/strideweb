<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'firm',
        'pay',
        'position',
        'description',
    ];

}
