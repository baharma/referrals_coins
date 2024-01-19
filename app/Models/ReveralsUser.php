<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReveralsUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'reveral_id',
        'token'
    ];
}
