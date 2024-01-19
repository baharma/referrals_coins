<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelReverals extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'percent',
    ];
}
