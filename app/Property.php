<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }
}
