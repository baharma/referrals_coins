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
        'token',
        'transacted'
    ];

    public function User(){
        return $this->hasOne(User::class,'id','user');
    }
    public function reveral(){
        return $this->hasOne(ReverealsCoint::class,'id','reveral_id');
    }
    public function reveralUse(){
        return $this->hasMany(UseReverallCode::class,'reveral_id','id');
    }
}
