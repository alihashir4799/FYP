<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    public function employees(){
        return $this->belongsToMany('App\Employee')->withPivot('status');
    }
}
