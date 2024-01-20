<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReverealsCoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'plans',
        'description',
        'price',
        'level'
    ];
}
