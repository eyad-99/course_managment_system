<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    //

     public function user()
    {
        return $this->belongsTo('App\User','id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\course','course_instructor');
    }
}
