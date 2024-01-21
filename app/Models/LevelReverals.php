<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelReverals extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'user',
        'name_use',
        'bonus_log',
        'percent',
        'date'
    ];


    public function users(){
        return $this->hasOne(User::class,'id','user');
    }
    public function userUse(){
        return $this->hasOne(User::class,'id','name_use');
    }
}
