<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps=false;

    public function dist(){
        return $this->hasMany("App\District",'states_id');
    }
}
