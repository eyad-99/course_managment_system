<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //

     public function students()
    {
        return $this->belongsToMany('App\student','course_student')->withPivot('grade', 'id');
    }

    public function instructors()
    {
        return $this->belongsToMany('App\instructor','course_instructor');
    }
}
