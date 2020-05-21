<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //

    public function student()
    {
        return $this->hasOne('App\student','id');
    }

     public function instructor()
    {
        return $this->hasOne('App\instructor','id');
    }
}
