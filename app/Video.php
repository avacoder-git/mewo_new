<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }
    public function setLinkAttribute($value){
        $array = explode('=',$value);
        $this->attributes['link'] = end($array);
    }
    public function getlink(){
        return  "https://www.youtube.com/watch?v=".$this->link;
    }

}
