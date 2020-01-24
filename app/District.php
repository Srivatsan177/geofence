<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps=false;


    public function dist(){
        return $this->belongsTo("App\State");
    }

    public function taluk(){
        return $this->hasMany("App\Taluka","districts_id");
    }
}
