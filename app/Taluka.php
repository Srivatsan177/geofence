<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taluka extends Model
{
    public $timestamps=false;

    public function taluk(){
        return $this->belongsTo("App\District");
    }

    public function area(){
        return $this->hasMany("App\Area","talukas_id");
    }
}
