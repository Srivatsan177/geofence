<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps=false;


    public function dist(){
        return $this->belongsTo("App\State");
    }
}
