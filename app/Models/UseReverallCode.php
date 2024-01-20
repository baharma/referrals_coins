<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UseReverallCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'reveral_id',
    ];


    public function getUser(){
        return $this->hasOne(User::class,'id','user');
    }
}
