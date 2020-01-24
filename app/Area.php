<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps=false;

    public function area(){
        return $this->belongsTo('App\Taluka');
    }

    public function land(){
        return $this->hasMany("App\Land","areas_id");
    }
}
