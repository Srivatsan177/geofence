<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    public function land(){
        return $this->belongsTo("App\Area","areas_id");
    }

    public function owner(){
        return $this->belongsTo("App\User","users_id");
    }

    public function imageSingle(){
        return $this->hasOne("App\Location");
    }
}
