<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoComment extends Model
{
    //
    protected $guarded;



    public function setImageAttribute($value){
        $this->attributes['image'] = asset('public/storage/'.$value);
    }

    public function setLinkAttribute($value){
        $array = explode('=',$value);
        $this->attributes['link'] = end($array);
    }
    public function getlink(){
        return  "https://www.youtube.com/watch?v=".$this->link;
    }

}
