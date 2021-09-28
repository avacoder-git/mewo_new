<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coworker extends Model
{
    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }

}
