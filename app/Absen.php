<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    public function users(){
        return $this->hasMany(User::class,'kartu','user_id');
    }
}
